<?php

use Illuminate\Support\Facades\Route;
use Smylmrz\Demo\Http\Controllers\DemoController;
use Smylmrz\Demo\Http\Controllers\LoginController;
use Smylmrz\Demo\Http\Controllers\RegisterController;

Route::group(['middleware' => 'web'], function () {
    
    Route::middleware('admin')->group(function () {
        Route::get('/', [DemoController::class, 'index'])->name('dashboard');
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
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