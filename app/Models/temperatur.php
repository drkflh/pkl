<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class temperatur extends Model
{
    public $table = "cold_storage_temperature_log";
    protected $fillable =[
        'tanggal','temperatur_reading','corrective_action','inspector_initial'
    ];
}
