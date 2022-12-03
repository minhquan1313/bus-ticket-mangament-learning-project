<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientAuthController extends Controller
{
    //
    public function signUpGet()
    {
        // $user = Auth::user();
        // // return Auth::;


        // $userFound = User::where('id', $user->id)->first();
        // $userFound->name = "Binh Edited22";
        // $userFound->save();
        // return $userFound;
        return view('client.auth.sign_up');
    }
    public function signUpPost(Request $req)
    {
        return 'hi';
    }
    public function signInGet()
    {
        // $user = Auth::user();
        // return Auth::;


        // $userFound = User::where('id', $user->id)->first();
        // $userFound->name = "Binh Edited22";
        // $userFound->save();
        // return $userFound;
        return view('client.auth.sign_in');
    }
    public function signInPost(Request $req)
    {
        return 'hi';
    }
}
