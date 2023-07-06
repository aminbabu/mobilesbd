<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:web', 'verified'])->prefix('profile')->namespace('Profile')->name('profile.')->group(function () {
});

Route::middleware(['auth:web'])->prefix('profile')->namespace('Profile')->name('profile.')->group(function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('edit');

    Route::patch('/', [ProfileController::class, 'update'])->name('update');

    Route::put('/{id}', [ProfileController::class, 'update_avatar'])->name('update_avatar');

    Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
});
