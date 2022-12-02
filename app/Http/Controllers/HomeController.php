<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function check(){
        if(!Auth::user()){
            return redirect()->route('login');
        }
        if(Auth::user()->name === 'admin'){
            return redirect()->route('admin');
        }
        if(Auth::user()->name === 'user'){
            return redirect()->route('user');
        }
        if(Auth::user()->userType === 'KHACHHANG'){
            return redirect()->route('khachhang');
        }
    }
}
