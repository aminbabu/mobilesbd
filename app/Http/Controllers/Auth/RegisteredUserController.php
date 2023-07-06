<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Validate user request.
     */
    private function getValidationRoules($table = 'users')
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255', 'unique:' . $table],
            'password' => ['required', Rules\Password::defaults()],
        ];

        return $rules;
    }

    /**
     * Redirect to the login route for admin or,
     * display the registration view.
     */
    public function create(): View|RedirectResponse
    {
        if (!isAdminRoute()) {
            return view("auth.frontend.register");
        }

        $hasAdminAlready = Admin::where('role', 'admin')->first();

        if ($hasAdminAlready) {
            return redirect()->route('admin.login');
        }

        return view('auth.backend.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $isAdmin = isAdminRoute();
        $guard = 'web';
        $rules = $this->getValidationRoules('users');

        if ($isAdmin) {
            $guard = 'admin';
            $rules = $this->getValidationRoules('admins');
        }

        $validated = $request->validate($rules);

        if ($isAdmin) {
            $user = Admin::create([
                ...$validated,
                'role' => 'admin',
                'password' => Hash::make($request->password),
            ]);
        } else {
            $user = User::create([
                ...$validated,
                'password' => Hash::make($request->password),
            ]);
        }

        event(new Registered($user));

        if ($guard === 'web') {
            Auth::guard('admin')->logout();
            $redirectedPath = RouteServiceProvider::HOME;
        } else {
            Auth::guard('web')->logout();
            $redirectedPath = RouteServiceProvider::Dashboard;
        }

        Auth::guard($guard)->login($user);
        return redirect($redirectedPath);
    }
}
