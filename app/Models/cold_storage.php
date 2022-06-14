<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cold_storage extends Model
{
    public $table = "cold_storage";
    protected $fillable =[
        'nama_cold_storage'
    ];
}
