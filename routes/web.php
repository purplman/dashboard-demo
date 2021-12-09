<?php

use Illuminate\Support\Facades\Route;
use Smylmrz\Dashboard\Http\Controllers\DashboardController;
use Smylmrz\Dashboard\Http\Controllers\LoginController;
use Smylmrz\Dashboard\Http\Controllers\RegisterController;

Route::group(['middleware' => 'web'], function () {
    
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/logout',    [LoginController::class, 'logout'])->name('logout');
    });

    Route::prefix('login')->group(function () {
        Route::get('/',  [LoginController::class, 'index'])->name('login')->middleware('guest');
        Route::post('/', [LoginController::class, 'login'])->name('login.attempt');
    });

    Route::prefix('register')->group(function () {
        Route::get('/',  [RegisterController::class, 'index'])->name('register');
        Route::post('/', [RegisterController::class, 'register'])->name('register.store');
    });
});