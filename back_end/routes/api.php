<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// AUth routes for login, register and logout 
Route::post('/register', [AuthController::class , 'register']);  
Route::post('/login',[AuthController::class, 'login']);
Route::post('/forgot-password',[AuthController::class, 'forgot-password']);
Route::post('/reset-password', [AuthController::class, 'reset-password']);
Route::post('/logout', [AuthController::class, 'logout']);