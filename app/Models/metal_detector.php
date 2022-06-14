<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class metal_detector extends Model
{
    public $table = "monitoring_metal_detector";
    protected $fillable =[
        'id','id_metal_detector','fe_20','sus_25','status'
    ];
}
