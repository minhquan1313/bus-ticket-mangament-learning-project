<?php

namespace App\Http\Controllers;

use App\Models\Chuyen;
use App\Models\Tinh;
use App\Models\TrangThaiVe;
use App\Models\VeXe;
use App\Models\Xe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function getVeXeWithVeXeId($id)
    {
        $veXe = VeXe::where('ve_xe_id', $id)->first();
        $chuyen = Chuyen::where('chuyen_id', $veXe->chuyen_id)->first();

        $xe = Xe::where('xe_id', $chuyen->xe_id)->first();

        $chuyen->xe = $xe;
        $chuyen->ve_xe = $veXe;
        $chuyen->from = Tinh::where('tinh_id', $chuyen->from_id)->first()->ten_tinh;
        $chuyen->to = Tinh::where('tinh_id', $chuyen->to_id)->first()->ten_tinh;
        $chuyen->ve_id = $veXe->ve_xe_id;
        $chuyen->trang_thai = TrangThaiVe::where('trang_thai_id', $veXe->trang_thai_id)->first();

        return $chuyen;
    }

    public function booked()
    {
        $veXes = VeXe::where('khach_hang_id', Auth::user()->id)->get();
        $chuyen = [];

        foreach ($veXes as $veXe) {
            array_push($chuyen, $this->getVeXeWithVeXeId($veXe->ve_xe_id));
        }

        return view('client.user.booked_ticket', compact('chuyen'));
    }
    public function bookedDetail($ve_xe_id)
    {
        $chuyen = $this->getVeXeWithVeXeId($ve_xe_id);
        return view('client.user.booked_ticket_detail', compact('chuyen'));
    }
}
