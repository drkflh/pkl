<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class suhu_udang extends Model
{
    public $table = "pencatatan_suhu_udang";
    protected $fillable =[
        'tanggal_jam','suhu','action','catatan','id_pegawai'
    ];
}
