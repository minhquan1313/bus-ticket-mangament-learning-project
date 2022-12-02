<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    protected $table = "khach_hang";
    public $timestamps = true;
    protected
        $fillable = [
            'khach_hang_id', 'sdt', 'ho', 'ten_dem', 'ten', 'mat_khau'
        ];
}
