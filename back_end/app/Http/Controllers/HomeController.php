<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Accueil(){
        $nom = "Yobs koler";
        $age = 25;  
        $town="Douala"; 
        $Cars = ["Mercedes","Toyota","Ferrari","Tesla","Lamborghini"];
      return view('accueil', compact('nom','age','town','Cars') ); 
    }

    function Contact(){
    return view('contact');
    }


    function Apropos(){
      return view('apropos'); 
    }

}
  
