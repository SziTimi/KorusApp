<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'loginForm'])
    ->name('loginForm');
Route::post('/login', [AuthController::class, 'login'])
    ->name('login');

// Inside routes/api.php

