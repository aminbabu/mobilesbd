<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     *
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $view = $request->user()->role ===  'subscriber' ? 'frontend' : 'backend';

        return view("{$view}.pages.profile.edit", ['user' => $request->user()]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        $guard = $request->user()->role === 'subscriber' ? '' : 'dashboard.';

        return Redirect::route("{$guard}profile.edit")->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $user = $request->user();

        $guard = $user->role === 'subscriber' ? 'web' : 'admin';

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

        $user->delete();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
