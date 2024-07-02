<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\App\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth.admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin-dashboard');
});