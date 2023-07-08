<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        $role = $request->user()->role;

        $guard = $role === 'user' ? 'frontend' : 'backend';

        $home = $role === 'user' ? RouteServiceProvider::HOME : RouteServiceProvider::Dashboard;

        return $request->user()->hasVerifiedEmail()
            ? redirect()->intended($home)
            : view("auth.{$guard}.verify-email");
    }
}
