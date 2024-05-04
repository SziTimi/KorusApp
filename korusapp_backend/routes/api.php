<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SheetMusicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserEventController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

/*Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users', [UserController::class, 'getAllUsers']);
    Route::get('/users/{id}', [UserController::class, 'getOneUserUser']);
});*/

Route::get('/users', [UserController::class, 'getAllUsers']);

// Route to get a single user by ID
Route::get('/users/{id}', [UserController::class, 'getOneUser']);

Route::get('/', [WelcomeController::class, 'index']);

Route::post('/login', [AuthController::class, 'apiLogin']);

/*Route::get('/login', [AuthController::class, 'loginForm'])
    ->name('loginForm');
Route::post('/login', [AuthController::class, 'login'])
    ->name('login');
*/



Route::get('/sheetmusic', [SheetMusicController::class, 'index'])
    ->name('sheetmusic');

Route::get('/userevent', [UserEventController::class, 'index'])
    ->name('userevent');
