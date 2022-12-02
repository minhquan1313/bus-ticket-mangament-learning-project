<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientAuthController extends Controller
{
    //
    public function signUpGet()
    {
        return view('client.auth.sign_up');
    }
    public function signUpPost(Request $req)
    {
        return 'hi';
    }
}
