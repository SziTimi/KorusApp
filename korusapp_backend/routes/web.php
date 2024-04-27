<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}) ->name('welcome');

Route::get ('/admin.index', [AdminController::class, 'index'])
    ->name('admin.index');

Route::get ('/user.index', [UserController::class, 'index'])
    ->name('user.index');

Route::get('/login', [AuthController::class, 'loginForm'])
    ->name('loginForm');
Route::post('/login', [AuthController::class, 'login'])
    ->name('login');

Route::any('logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::get('register', [AuthController::class, 'registerForm'])
    ->name('registerForm');
Route::post('register', [AuthController::class, 'register'])
    ->name('register');

