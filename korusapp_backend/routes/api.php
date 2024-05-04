<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SheetMusicController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/login', [AuthController::class, 'loginForm'])
    ->name('loginForm');
Route::post('/login', [AuthController::class, 'login'])
    ->name('login');


Route::get('/sheetmusic', [SheetMusicController::class, 'index'])
    ->name('sheetmusic');
