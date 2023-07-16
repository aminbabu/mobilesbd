<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// import common routes
require __DIR__ . '/common.php';

Route::middleware('guest:web,admin')->group(function () {
    // guest routes for users
    extracted_guest_routes();

    // guest routes for admins
    Route::prefix('admin')->namespace('Admin')->name('dashboard.')->group(function () {
        Route::get('/', function () {
            return redirect()->route('dashboard.register');
        });

        extracted_guest_routes();
    });
});

Route::middleware('auth:web,admin')->group(function () {
    // auth routes for users
    extracted_auth_routes();

    // auth routes for admins
    Route::prefix('admin')->namespace('Admin')->name('dashboard.')->group(function () {
        extracted_auth_routes();
    });
});
