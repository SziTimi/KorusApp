<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}) ->name('welcome');

Route::get ('/admin.index', [AdminController::class, 'index'])
    ->name('admin.index');

//Route::get ('/user.index', [UserController::class, 'index'])
  //  ->name('user.index');

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

Route::get('/admin/notifications/create', [NotificationController::class, 'create'])
    ->name('notifications.create');
Route::post('/admin/notifications', [NotificationController::class, 'store'])
    ->name('notifications.store');

// Route to show the edit form
Route::get('/notifications/{notification}/edit', [NotificationController::class, 'edit'])
    ->name('notifications.edit');


// Route to submit the update
Route::put('/notifications/{notification}', [NotificationController::class, 'update'])
    ->name('notifications.update');
