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


Route::post('/update-user/{user}', 'UserController@update')->name('users.update');



Route::get('admin/events', array(App\Http\Controllers\Admin\EventController::class, 'index'))
    ->name('admin.events.index');

// Show the form for creating a new event
Route::get('admin/events/create', [App\Http\Controllers\Admin\EventController::class, 'create'])
    ->name('admin.events.create');

// Store a newly created event in the database
Route::post('admin/events', [App\Http\Controllers\Admin\EventController::class, 'store'])
    ->name('admin.events.store');

// Add additional routes for edit, update, delete if needed
// For example:
// Show the form for editing the specified event
Route::get('admin/events/{event}/edit', [App\Http\Controllers\Admin\EventController::class, 'edit'])
    ->name('admin.events.edit');

// Update the specified event in the database
Route::put('admin/events/{event}', [App\Http\Controllers\Admin\EventController::class, 'update'])
    ->name('admin.events.update');

// Remove the specified event from the database
Route::delete('admin/events/{event}', [App\Http\Controllers\Admin\EventController::class, 'destroy'])
    ->name('admin.events.destroy');

/*Route::post('/update.user/{user}', [AdminController::class, 'update'])
    ->name('users.update');*/
