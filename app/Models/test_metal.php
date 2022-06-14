<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test_metal extends Model
{
    public $table = "test_metal_detector";
    protected $fillable =[
        'waktu','sebelum_dioperasikan','result'
    ];
}
