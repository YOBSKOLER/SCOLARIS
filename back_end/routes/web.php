<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdeaController;
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

Route::get('/ideas',[IdeaController::class, 'index'])->name('ideas');
Route::get('/ideas/{idea}',[IdeaController::class, 'show'])->name('ideas');
Route::get('/ideas/{idea}/edit',[IdeaController::class, 'edit'])->name('ideas.edit');
Route::patch('/ideas/{idea}',[IdeaController::class, 'update'])->name('ideas.update');
Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store');
Route::delete('/delete-ideas/{idea}', [IdeaController::class, 'destroy'])->name('ideas.destroy');
