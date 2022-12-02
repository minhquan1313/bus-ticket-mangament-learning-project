<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    protected $table = "KhachHang";
    public $timestamps = true;
    protected
        $fillable = [
            'tinh_id', 'ten_tinh'
        ];
}
