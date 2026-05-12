<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, World!';
});
Route::view('welcome', 'welcome',[
    'name' => 'Scolaris',
    'version' => '1.0.0',
        ]);