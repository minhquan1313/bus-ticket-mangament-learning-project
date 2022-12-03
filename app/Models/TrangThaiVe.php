<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrangThaiVe extends Model
{
    use HasFactory;
    protected $table = "trang_thai";
    public $timestamps = true;
    protected
        $fillable = [
            'trang_thai_id', 'ten'
        ];
}
