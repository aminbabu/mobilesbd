<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// import common routes
require __DIR__ . '/common.php';

Route::middleware('guest:web,admin')->group(function () {
    // guest routes for users
    extractedGuestRoutes();

    // guest routes for admins
    Route::prefix('admin')->namespace('Admin')->name('dashboard.')->group(function () {
        Route::get('/', function () {
            return redirect()->route('dashboard.register');
        });

        extractedGuestRoutes();
    });
});

Route::middleware('auth:web,admin')->group(function () {
    // auth routes for users
    extractedAuthRoutes();

    // auth routes for admins
    Route::prefix('admin')->namespace('Admin')->name('dashboard.')->group(function () {
        extractedAuthRoutes();
    });
});