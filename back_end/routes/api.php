<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// AUth routes for login, register and logout   
Route::match(['get','post'],'login',[AuthController::class,'login']);
Route::match(['get','post'],'register',[AuthController::class,'register']);
Route::match(['get','post'],'forgot-password',[AuthController::class,'forgotPassword']);
Route::match(['get','post'],'logout',[AuthController::class,'logout']);     