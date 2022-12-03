<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VeXe extends Model
{
    use HasFactory;
    protected $table = "ve_xe";
    public $timestamps = true;
    protected $primaryKey = 've_xe_id';
    protected
        $fillable = [
            've_xe_id', 'khach_hang_id', 'chuyen_id', 'khoi_hanh_gio', 'so_nguoi', 'trang_thai_id', 'created_at', 'updated_at'
        ];
}
