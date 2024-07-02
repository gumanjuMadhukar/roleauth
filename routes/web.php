<?php

use App\Http\Controllers\App\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [HomeController::class,'login'])->name('login');
// Route::get('/register', [HomeController::class,'register'])->name('register');
Route::name('auth-')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('register/save', [AuthController::class, 'registerSave'])->name('register-save');
});