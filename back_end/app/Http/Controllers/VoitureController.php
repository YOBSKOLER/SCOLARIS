<?php

namespace App\Http\Controllers;

use App\Models\Voitures;
// use Illuminate\Http\Request;

class VoitureController extends Controller
{
   public function voitures (){
    $voitures=Voitures::all();
        return view('voitures',['voitures'=> Voitures::latest('created_at')->paginate(10)]);
        
    }
} 
