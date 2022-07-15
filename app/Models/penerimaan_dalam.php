<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerimaan_dalam extends Model
{
    public $table = 'penerimaan_dalam';
    protected $fillable = [
        'tangga;', 'kwantitas', 'size', 'lbs'
    ];
}
