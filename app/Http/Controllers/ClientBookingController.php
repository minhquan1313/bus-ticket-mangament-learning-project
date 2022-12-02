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
        $chuyen_va_xe_ = Arr::sort($chuyen_va_xe, function ($cvx) {
            // Sort the student's scores by their test score.
            return $cvx->thoi_gian_khoi_hanh;
        });

        foreach ($chuyen_va_xe as $key => $row) {
            $count[$key] = $row['thoi_gian_khoi_hanh'];
        }


        return $chuyen_va_xe_;

        foreach ($chuyen_va_xe as $cvx) {
            $cvx->thoi_gian_khoi_hanh = date('Y-m-d', strtotime($time));

            $xe = Xe::where('xe_id', $cvx->xe_id)->first();
            $cvx->xe = $xe;
            $cvx->from = $_GET['from'];
            $cvx->to = $_GET['to'];
        }

        return view('client.booking.index', compact('tinh', 'chuyen_va_xe'));
    }
}
