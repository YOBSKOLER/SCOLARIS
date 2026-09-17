<?php

// use Illuminate\Support\Facades\Request;

// use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VoitureController;
use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome',[
        'greeting' => 'Hello ',
        'person'=>request('name','yobs')
    ]);
})->name('welcome');


Route::get('/accueil',[HomeController::class, 'Accueil'])->name('accueil');
Route::get('/contact',[HomeController::class, 'Contact'])->name('contact');

Route::get('/apropos', [HomeController::class,'Apropos'])->name('apropos');

Route::get('/voitures',[VoitureController::class, 'voitures'])->name('voiture');

Route::get('/ideas',function (){
//    $ideas=session()->get('ideas',[]);
//    dd($ideas);
$ideas = \Illuminate\Support\Facades\DB::table('ideas')->get();

// dd($ideas);
return $ideas[0]=>description;

    return view('ideas',[
        'ideas'=>$ideas
    ]);
})->name('ideas');


Route::post('/ideas',function (){
    $idea=request('idea');
    session()->push('ideas',$idea);
    return redirect('/ideas');
});


Route::get('/delete-ideas',function (){
    session()->forget('ideas');
    return redirect('/ideas');
})->name('delete-ideas');
?>






