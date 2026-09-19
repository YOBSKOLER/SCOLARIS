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

//show the idea with the given id
Route::get('/ideas/{idea}', function (Idea $idea) {
           return view('idea', [
        'ideas' => $idea,
        ]);
    
})->name('ideas');

//Edit the idea with the given id
Route::get('/ideas/{idea}/edit', function (Idea $idea) {

    return view('edit', [
        'ideas' => $idea,
        ]);
    
})->name('ideas.edit');
//Edit the idea with the given id
Route::patch('/ideas/{idea}', function (Idea $idea) {
$idea->update([
    'description' => request('description'),
]);
    return redirect("/ideas/{$idea->id }")->with('success', 'Idea updated successfully!');
})->name('ideas.update');


//store action for the idea
Route::post('/ideas', function () {
    Idea::create([
        'description' => request('description'),
        'state' => 'pending',
    ]);

    return redirect('/ideas');
});


//destoy action for the idea
Route::delete('/delete-ideas/{idea}', function (Idea $idea) {
    $idea->delete();
    return redirect('/ideas');
})->name('delete-ideas');

