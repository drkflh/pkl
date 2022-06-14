<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class udang extends Model
{
    public $table = "udang";
    protected $fillable =[
        'nama_udang', 'foto_udang'
    ];
}