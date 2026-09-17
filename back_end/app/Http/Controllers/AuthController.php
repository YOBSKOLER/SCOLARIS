<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use Illuminate\View\View;
// use Symfony\Component\HttpKernel\Profiler\Profile;

class AuthController extends Controller
{
    public function register(Request $request){
        $request->validate(
            [
                'SchoolName'=>'required|min:30',
                'SchoolEmail'=>'required|email|unique:user',
                'password'=>bcrypt($request->password)
            ]
        );

        School::create([
            'SchoolName'=>$request->SchoolName,
            'SchoolEmail'=>$request->SchoolName,
            'phone'=>$request->phone
        ]);
    }
    public function login(Request $request){
        $credentials = $request->only('email','password');
        if(!Auth::attempt($credentials)){
            return response()->json(['error'=>'mot de passe ou email incorrect'], 401 );
        }
        $user = Auth::user();

        if (!$user) {
            return response()->json(['error' => 'Utilisateur introuvable'], 401);
        }

        $createToken = [$user, 'createToken'];
        if (is_callable($createToken)) {
            $token = $createToken('auth_token')->plainTextToken;
        } else {
            $token = bin2hex(random_bytes(40));
        }

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]); 
    }




    public function show (?string $name ='', string $age ='') {
    return 'Hello, world! my name is '.$name .' i have '.$age ;
    }
}