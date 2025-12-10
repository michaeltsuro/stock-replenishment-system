<?php

use Illuminate\Support\Facades\Route;
use App\Domains\Auth\Controllers\{
    RegisterController,
    LoginController,
    LogoutController,
    RefreshController,
    MeController
};

// Authentication Routes
Route::prefix('auth')->group(function () {
    Route::post('/register', RegisterController::class);
    Route::post('/login', LoginController::class);
    
    Route::middleware('auth:api')->group(function () {
        Route::post('/logout', LogoutController::class);
        Route::post('/refresh', RefreshController::class);
        Route::get('/me', MeController::class);
    });
});