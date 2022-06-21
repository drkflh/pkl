<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suhu_air extends Model
{
    public $table = "pencatatan_suhu_air";
    protected $fillable =[
        'tanggal','hari','delapan','suhu1','sepuluh','suhu2','duabelas','suhu3','empatbelas','suhu4','acon','nama_pegawai','paraf'
    ];
}