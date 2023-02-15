<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

if (!function_exists('extractedProfileRoutes')) {
    function extractedProfileRoutes()
    {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');

        Route::patch('/', [ProfileController::class, 'update'])->name('update');

        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    }
}

Route::middleware(['auth:admin', 'verified'])->prefix('dashboard')->namespace('Dashboard')->name('dashboard.')->group(function () {
});

Route::middleware(['auth:admin'])->prefix('dashboard')->namespace('Dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::prefix('profile')->namespace('DashboardProfile')->name('profile.')->group(function () {
        extractedProfileRoutes();
    });
});

Route::middleware(['auth:admin'])->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
});

Route::middleware(['auth:admin'])->namespace('Admin')->name('admin.')->group(function () {
});
