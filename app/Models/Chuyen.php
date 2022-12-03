<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chuyen extends Model
{
    use HasFactory;
    protected $table = "chuyen";
    public $timestamps = true;
    protected
        $fillable = [
            'chuyen_id', 'from_id', 'to_id', 'xe_id', 'thoi_gian_khoi_hanh', 'do_dai'
        ];
}
