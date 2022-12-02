<?php

namespace App\Http\Controllers;

use App\Models\Chuyen;
use App\Models\ChuyenVaXe;
use App\Models\Tinh;
use App\Models\Xe;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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

        $chuyenId = $tinhFrom->tinh_id . '-' . $tinhTo->tinh_id;

        $time = $_GET['time'];
        $time_ = date('Y-m-d', strtotime($time . ' +1 day'));

        $chuyen_va_xe = ChuyenVaXe::where('chuyen_id', $chuyenId)->where('thoi_gian_khoi_hanh', '>=',  $time)->where('thoi_gian_khoi_hanh', '<=',  $time_)->get();

        foreach ($chuyen_va_xe as $cvx) {
            $xe = Xe::where('xe_id', $cvx->xe_id)->first();
            $cvx->xe = $xe;
            $cvx->from = $_GET['from'];
            $cvx->to = $_GET['to'];
        }

        return view('client.booking.index', compact('tinh', 'chuyen_va_xe'));
    }
    public function detail()
    {
        // chuyen_id=1-2&xe_id=1&thoi_gian_khoi_hanh=2022-12-02%2000:00:00
        $chuyenId = explode('-', $_GET['chuyen_id']);

        $tinhFrom = Tinh::where('tinh_id', $chuyenId[0])->first();
        $tinhTo = Tinh::where('tinh_id', $chuyenId[1])->first();

        $xe = Xe::where('xe_id', $_GET['xe_id'])->first();
        $khoiHanh = explode(' ', $_GET['thoi_gian_khoi_hanh'])[0];

        return view('client.booking.detail', compact(
            'tinhFrom',
            'tinhTo',
            'xe',
            'khoiHanh'
        ));
    }

    public function create(Request $req)
    {
        return  $req;
        # code...
    }
}
