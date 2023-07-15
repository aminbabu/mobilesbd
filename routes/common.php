<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerifyEmailController;


// repeated guest routes
if (!function_exists('extractedGuestRoutes')) {
    function extractedGuestRoutes(): void
    {
        Route::get('register', [RegisteredUserController::class, 'create'])->name('register');

        Route::post('register', [RegisteredUserController::class, 'store']);

        Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store']);

        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

        Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');

        Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
    }
}

// repeated auth routes
if (!function_exists('extractedAuthRoutes')) {
    function extractedAuthRoutes(): void
    {
        Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');

        Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify');

        Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');

        Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');

        Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

        Route::put('password/{role}/{id}', [PasswordController::class, 'update'])->name('password.update');

        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    }
}

// profile routes
if (!function_exists('profile_routes')) {
    function profile_routes()
    {
        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get('/{role}/{id}/edit', [ProfileController::class, 'edit'])->name('edit');

            Route::get('/{role}/{id}/edit/details', [ProfileController::class, 'edit_details'])->name('edit_details');

            Route::get('/{role}/{id}/edit/password', [ProfileController::class, 'edit_password'])->name('edit_password');

            Route::get('/{role}/{id}/delete', [ProfileController::class, 'edit_destroy'])->name('edit_destroy');

            Route::patch('/{role}/{id}', [ProfileController::class, 'update'])->name('update');

            Route::put('/{role}/{id}', [ProfileController::class, 'details'])->name('details');

            Route::delete('/{role}/{id}', [ProfileController::class, 'destroy'])->name('destroy');
        });
    }
}