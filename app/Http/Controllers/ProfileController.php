<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * local variables
     *
     */
    private $user;
    private $view;
    private $filepath;

    private function initLocalVariables($role, $id)
    {
        if ($role === 'user') {
            $this->user = User::find($id);
            $this->view = 'frontend';
            $this->filepath = 'uploads/frontend/users/';

        } else {
            $this->user = Admin::find($id);
            $this->view = 'backend';
            $this->filepath = 'uploads/backend/users/';
        }
    }

    /**
     *
     * Display the user's profile form.
     */
    public function edit($role, $id): View
    {
        $this->initLocalVariables($role, $id);

        return view("{$this->view}.pages.profile.edit", ['user' => $this->user]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request, $role, $id): RedirectResponse
    {
        $this->initLocalVariables($role, $id);

        $profileUpdateRequest = new ProfileUpdateRequest($this->user);

        $this->user->fill($request->validate($profileUpdateRequest->rules()));

        if ($this->user->isDirty('email')) {
            $this->user->email_verified_at = null;
        }


        $this->user->save();

        return back()->with('status', 'profile-updated');
    }

    /**
     *
     * Display the user's profile details form.
     */
    public function edit_details($role, $id): View
    {
        $this->initLocalVariables($role, $id);

        return view("{$this->view}.pages.profile.edit-details", ['user' => $this->user]);
    }

    /**
     * Update the user's profile details.
     */
    public function details(Request $request, $role, $id): RedirectResponse
    {
        $this->initLocalVariables($role, $id);

        $validated = $request->validated();
        $filename = null;

        if ($this->user->username) {
            return back()->with('status', 'username-exists');
        }

        if ($request->file('avatar')) {

            // remove old profile image (if exists)
            if ($this->user->avatar != '' && $this->user->avatar != null) {
                unlink($this->filepath . $this->user->avatar);
            }

            // prepare new profile image
            $avatar = $request->file('avatar');
            $filename = date('YmdHi') . $avatar->getClientOriginalName();
            $avatar->move(public_path($this->filepath), $filename);
        }

        $this->user->fill($validated);
        $this->user->avatar = $filename;
        $this->user->save();

        return back()->with('status', 'profile-updated');
    }

    /**
     *
     * Display the user's change password form.
     */
    public function edit_password($role, $id): View
    {
        $this->initLocalVariables($role, $id);

        return view("{$this->view}.pages.profile.edit-password", ['user' => $this->user]);
    }

    /**
     *
     * Display the user's profile deletion form.
     */
    public function edit_destroy($role, $id): View
    {
        $this->initLocalVariables($role, $id);

        return view("{$this->view}.pages.profile.edit-deletion", ['user' => $this->user]);
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request, $role, $id): RedirectResponse
    {
        $this->initLocalVariables($role, $id);

        $guard = $this->user->role->name === 'user' ? 'web' : 'admin';

        $request->validateWithBag('accountDelition', [
            'delete_password' => [
                'required', 'current_password:' . $guard
            ],
            [
                'delete_password.required' => 'The :attribute field is required.',
                'delete_password.current_password' => 'The :attribute confirmation does not match.',
            ]
        ]);

        Auth::guard($guard)->logout();

        $this->user->delete();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}