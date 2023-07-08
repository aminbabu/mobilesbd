<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Dashboard profile
if (!function_exists('dashboard_profile')) {
    function dashboard_profile()
    {
        Route::prefix('profile')->namespace('DashboardProfile')->name('profile.')->group(function () {
            Route::get('/', [ProfileController::class, 'edit'])->name('edit');

            Route::patch('/', [ProfileController::class, 'update'])->name('update');

            Route::put('/{id}', [ProfileController::class, 'update_avatar'])->name('update_avatar');

            Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
        });
    }
}

// Dashboard users
if (!function_exists('dashboard_users')) {
    function dashboard_users()
    {
        Route::middleware(['admin'])->prefix('users')->name('user.')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('index');
            Route::get('/create', [UserController::class, 'create'])->name('create');
            Route::post('/create', [UserController::class, 'store'])->name('store');
            Route::get('/user/{id}', [UserController::class, 'show'])->name('profile');
            Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
            Route::patch('/{id}', [UserController::class, 'update'])->name('update');
            Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
        });
    }
}

Route::middleware(['auth:admin'])->prefix('dashboard')->namespace('Dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    dashboard_profile();
    dashboard_users();
});

Route::middleware('auth:admin')->name('admin.')->group(function () {

});