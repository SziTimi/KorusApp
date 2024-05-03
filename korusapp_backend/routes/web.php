<?php

use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
}) ->name('welcome');*/



Route::view("/", 'welcome')->name('welcome');

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



Route::get('/admin/events', [EventController::class, 'index'])->name('admin.events.index');
Route::get('/admin/events/create', [EventController::class, 'create'])->name('admin.events.create');
Route::post('/admin/events', [EventController::class, 'store'])->name('admin.events.store');
Route::get('/admin/events/{id}/edit', [EventController::class, 'edit'])->name('admin.events.edit');
Route::put('/admin/events/{id}', [EventController::class, 'update'])->name('admin.events.update');
Route::delete('/admin/events/{id}', [EventController::class, 'destroy'])->name('admin.events.destroy');





Route::get('/admin/users', [App\Http\Controllers\Admin\UserListController::class, 'index'])->name('admin.users');

Route::get('/admin/users/show/{user}', [App\Http\Controllers\Admin\ModifyUserController::class, 'show'])
    ->name('admin.users.show');

Route::put('/admin/users/update/{user}', [App\Http\Controllers\Admin\ModifyUserController::class, 'update'])
    ->name('admin.users.update');
/*Route::post('/update.user/{user}', [AdminController::class, 'update'])
    ->name('users.update');*/

Route::get('/admin/payments', [PaymentController::class, 'index'])
    ->name('admin.payments.index');

Route::patch('/admin/payments/{payment}', [PaymentController::class, 'update'])
    ->name('admin.payments.update');



