<?php


use App\Http\Controllers\auth\EmailVerificationController;
use App\Http\Controllers\auth\RegisterUserController;
use Illuminate\Support\Facades\Route;

    Route::middleware('guest')->group(function () {

        Route::post('/register', [RegisterUserController::class, 'register']);
        Route::post('/login', [RegisterUserController::class, 'login']);
        
        Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('verification.verify');
    });

























