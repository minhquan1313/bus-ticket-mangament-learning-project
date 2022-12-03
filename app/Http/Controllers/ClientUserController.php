<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientUserController extends Controller
{
    //
    public function bookPost()
    {
        return view('client.user.booked_ticket');
    }
    public function bookPut()
    {
        return view('client.user.booked_ticket');
    }

    public function booked()
    {
        return view('client.user.booked_ticket');
    }
    public function bookedDetail($id)
    {
        return view('client.user.booked_ticket_detail');
    }
}
