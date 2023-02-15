<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View | RedirectResponse
    {
        $guard = 'web';
        $layout = 'frontend';

        if (isAdminRoute()) {
            $guard = 'admin';
            $layout = 'backend';
        }

        if (Auth::guard($guard)->check()) {
            return redirect()->route('dashboard.index');
        }

        return view("auth.{$layout}.login");
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $guard = isAdminRoute() ? 'admin' : 'web';

        $layout = $guard === 'admin' ? route('dashboard.index') : RouteServiceProvider::HOME;

        $request->authenticate($guard);

        $request->session()->regenerate();

        Auth::guard($guard  === 'admin' ? 'web' : 'admin')->logout();

        return redirect()->intended($layout);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $guard = isAdminRoute() ? 'admin' : 'web';

        Auth::guard($guard)->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
