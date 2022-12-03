<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xe extends Model
{
    use HasFactory;
    protected $table = "xe";
    public $timestamps = true;
    protected
        $fillable = [
            'xe_id', 'bien_so', 'hinh_anh', 'cho_ngoi', 'loai', 'gia_tien', 'wifi', 'bed'
        ];
}
