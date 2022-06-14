<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class freezing extends Model
{
    public $table = "freezing_monitoring_record";
    protected $fillable =[
        'date','no_freezing_unit','start_time','freezing_temperature_1','amount_of_product','end_time','freezing_temperature_2','product_condition','component_action'
    ];
}
