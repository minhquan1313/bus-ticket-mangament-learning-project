<?php

namespace App\Http\Controllers;

use App\Models\Tinh;
use Illuminate\Http\Request;

class ClientHomeController extends Controller
{
    //
    public function index()
    {
        $tinh = Tinh::all();
        return view('client.home', compact('tinh'));
    }
}
