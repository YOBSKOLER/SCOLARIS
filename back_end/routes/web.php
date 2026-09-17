<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VoitureController;
use App\Models\Idea;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'Hello ',
        'person' => request('name', 'yobs'),
    ]);
})->name('welcome');

Route::get('/accueil', [HomeController::class, 'Accueil'])->name('accueil');
Route::get('/contact', [HomeController::class, 'Contact'])->name('contact');
Route::get('/apropos', [HomeController::class, 'Apropos'])->name('apropos');
Route::get('/voitures', [VoitureController::class, 'voitures'])->name('voiture');

Route::get('/ideas', function () {
    $ideas = Idea::all();

    return view('ideas', [
        'ideas' => $ideas,
    ]);
})->name('ideas');

Route::post('/ideas', function () {
    Idea::create([
        'description' => request('idea'),
        'state' => 'pending',
    ]);

    return redirect('/ideas');
});

Route::get('/delete-ideas', function () {
    session()->forget('ideas');

    return redirect('/ideas');
})->name('delete-ideas');

