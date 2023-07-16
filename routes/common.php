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
if (!function_exists('extracted_uest_routes')) {
    function extracted_uest_routes(): void
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
if (!function_exists('extracted_auth_routes')) {
    function extracted_auth_routes(): void
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

// dashboard user routes
if (!function_exists('dashboard_user_routes')) {
    function dashboard_user_routes()
    {
        Route::middleware(['admin'])->prefix('users')->name('user.')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('index');
            Route::get('/create', [UserController::class, 'create'])->name('create');
            Route::post('/create', [UserController::class, 'store'])->name('store');
            Route::get('/user/{id}', [UserController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
            Route::patch('/{id}', [UserController::class, 'update'])->name('update');
            Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
        });
    }
}

// brand routes
if (!function_exists('brand_routes')) {
    function brand_routes()
    {
        Route::middleware(['admin'])->prefix('brands')->name('brand.')->group(function () {
            Route::get('/', [BrandController::class, 'index'])->name('index');
            Route::get('/create', [BrandController::class, 'create'])->name('create');
            Route::post('/', [BrandController::class, 'store'])->name('store');
            Route::get('/{id}', [BrandController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [BrandController::class, 'edit'])->name('edit');
            Route::patch('/{id}', [BrandController::class, 'update'])->name('update');
            Route::delete('/{id}', [BrandController::class, 'destroy'])->name('destroy');
        });
    }
}

// showroom routes
if (!function_exists('showroom_routes')) {
    function showroom_routes()
    {
        Route::middleware(['admin'])->prefix('showrooms')->name('showroom.')->group(function () {
            Route::get('/', [ShowroomController::class, 'index'])->name('index');
            Route::get('/create', [ShowroomController::class, 'create'])->name('create');
            Route::post('/', [ShowroomController::class, 'store'])->name('store');
            Route::get('/{id}', [ShowroomController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [ShowroomController::class, 'edit'])->name('edit');
            Route::patch('/{id}', [ShowroomController::class, 'update'])->name('update');
            Route::delete('/{id}', [ShowroomController::class, 'destroy'])->name('destroy');
        });
    }
}
