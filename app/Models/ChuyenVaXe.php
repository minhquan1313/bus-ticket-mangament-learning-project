<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuyenVaXe extends Model
{
    use HasFactory;
    protected $table = "chuyen_va_xe";
    public $timestamps = true;
    protected
        $fillable = [
            'chuyen_id', 'xe_id', 'thoi_gian_khoi_hanh', 'do_dai'
        ];
}
