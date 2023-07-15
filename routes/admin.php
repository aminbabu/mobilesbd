<?php

use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ShowroomController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

// import common routes
require __DIR__ . '/common.php';

// Dashboard users
if (!function_exists('dashboard_users')) {
    function dashboard_users()
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

// Dashboard brands
if (!function_exists('dashboard_brands')) {
    function dashboard_brands()
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

// Dashboard showrooms
if (!function_exists('dashboard_showrooms')) {
    function dashboard_showrooms()
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

Route::middleware(['auth:admin'])->prefix('dashboard')->namespace('Dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    profile_routes();
    dashboard_users();
    dashboard_brands();
    dashboard_showrooms();
});

Route::middleware('auth:admin')->name('dashboard.')->group(function () {

});