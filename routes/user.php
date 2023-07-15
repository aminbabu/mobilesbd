<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:web', 'verified'])->prefix('profile')->namespace('Profile')->name('profile.')->group(function () {
});

Route::middleware(['auth:web'])->group(function () {
    profile_routes();
});
