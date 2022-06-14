<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temperature_suhu extends Model
{
    public $table = "temperature_suhu_udang";
    protected $fillable =[
        'tanggal_jam','raw_material','potong_kepala','sortir','koreksi','susun'
    ];
}
