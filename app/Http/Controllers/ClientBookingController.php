<?php

namespace App\Http\Controllers;

use App\Models\Chuyen;
use App\Models\Tinh;
use App\Models\Xe;
use Illuminate\Http\Request;

class ClientBookingController extends Controller
{
    //
    public function index()
    {
        $tinh = Tinh::all();
        $chuyen_va_xe = [];
        if (!isset($_GET['from']) || !isset($_GET['to']))
            return view('client.booking.index', compact('tinh', 'chuyen_va_xe'));

        $tinhFrom = Tinh::where("ten_tinh", $_GET['from'])->first();
        $tinhTo = Tinh::where("ten_tinh", $_GET['to'])->first();

        // $chuyenId = $tinhFrom->tinh_id . '-' . $tinhTo->tinh_id;

        $time = $_GET['time'];
        $time_ = date('Y-m-d', strtotime($time . ' +1 day'));

        $chuyen_va_xe = Chuyen::where('from_id', $tinhFrom->tinh_id)->where('to_id', $tinhTo->tinh_id)->where('thoi_gian_khoi_hanh', '>=',  $time)->where('thoi_gian_khoi_hanh', '<=',  $time_)->get();

        foreach ($chuyen_va_xe as $cvx) {
            $xe = Xe::where('xe_id', $cvx->xe_id)->first();
            $cvx->xe = $xe;
            $cvx->from = $_GET['from'];
            $cvx->to = $_GET['to'];
        }

        return view('client.booking.index', compact('tinh', 'chuyen_va_xe'));
    }
    public function detail($chuyen_id)
    {
        $chuyen = Chuyen::where('chuyen_id', $chuyen_id)->first();

        $tinhFrom = Tinh::where('tinh_id', $chuyen->from_id)->first();
        $tinhTo = Tinh::where('tinh_id', $chuyen->to_id)->first();

        $xe = Xe::where('xe_id', $chuyen->xe_id)->first();
        $khoiHanh = explode(' ', $chuyen->thoi_gian_khoi_hanh)[0];

        return view('client.booking.detail', compact(
            'tinhFrom',
            'tinhTo',
            'xe',
            'khoiHanh',
            'chuyen'
        ));
    }

    public function create(Request $req)
    {
        return  $req;
    }
}
