<?php

use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ShowroomController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

// import common routes
require __DIR__ . '/common.php';

Route::middleware(['auth:admin'])->prefix('dashboard')->namespace('Dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    profile_routes();
    dashboard_user_routes();
    brand_routes();
    showroom_routes();
});

Route::middleware('auth:admin')->name('dashboard.')->group(function () {

});
