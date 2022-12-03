<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VeXe extends Model
{
    use HasFactory;
    protected $table = "ve_xe";
    public $timestamps = true;
    protected
        $fillable = [
            've_xe_id', 'khach_hang_id', 'chuyen_id', 'so_nguoi', 'trang_thai_id'
        ];
}
