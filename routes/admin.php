<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:admin')->name('admin.')->group(function () {
    // Dashboard users
    Route::prefix('users')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('edit');
    });
});

Route::middleware(['auth:admin'])->prefix('dashboard')->namespace('Dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::prefix('profile')->namespace('DashboardProfile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');

        Route::patch('/', [ProfileController::class, 'update'])->name('update');

        Route::put('/{id}', [ProfileController::class, 'update_avatar'])->name('update_avatar');

        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });
});
