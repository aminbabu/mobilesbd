<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * display users list
     *
     */
    public function index(Request $request): View
    {
        $users = Admin::all();

        return view('backend.pages.users.index', ['users' => $users]);
    }

    /**
     * display new user adding form
     *
     */
    public function create(Request $request): View
    {
        $roles = Role::whereNotIn('name', ['user'])->get();

        return view('backend.pages.users.add', ['roles' => $roles]);
    }

    /**
     * create new user
     *
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255', 'unique:admins'],
            'password' => ['required', Rules\Password::defaults()],
            'role_id' => ['required', 'string'],
        ]);

        Admin::create([
            ...$validated,
            'password' => Hash::make($request->password),
        ]);

        return back()->with('status', 'user-created');
    }

    /**
     * display existing user profile details
     *
     */
    public function show(Request $request, $id): View
    {
        $user = Admin::find($id);

        return view('backend.pages.users.profile', ['user' => $user]);
    }

    /**
     * display existing user update form
     *
     */
    public function edit(Request $request, $id): View
    {
        $user = Admin::find($id);
        $roles = Role::whereNotIn('name', ['user'])->get();

        return view('backend.pages.users.edit', ['roles' => $roles, 'user' => $user]);
    }

    /**
     * update existing user details
     *
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255', Rule::unique(Admin::class)->ignore($id)],
            'password' => ['required', Rules\Password::defaults()],
            'role_id' => ['required', 'string'],
        ]);

        $user = Admin::find($id);

        if ($request->user()->isDirty('email')) {
            $user()['email_verified_at'] = null;
        }
        $user['name'] = $validated['name'];
        $user['email'] = $validated['email'];
        $user['password'] = Hash::make($validated['password']);
        $user['role_id'] = $validated['role_id'];

        $user->save();

        return back()->with('status', 'user-updated');
    }

    /**
     * delete existing user
     *
     */
    public function destroy(Request $request, $id): RedirectResponse
    {
        $user = Admin::find($id);

        $user->delete();

        return redirect()->route('dashboard.user.index')->with('status', 'user-deleted');
    }
}