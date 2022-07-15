<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\penerimaan_dalam;
use Illuminate\Http\Request;

class PdalamController extends Controller
{
    public function penerimaandalam()
    {
        $pdalam = penerimaan_dalam::get();
        return view('penerimaandalam', [
            'penerimaan_dalam' => $pdalam,
        ]);
    }

    public function convert()
    {
        DB::table('penerimaan_dalam')
            ->update(array(
                'lbs' => DB::raw('lbs * 2'),
            ));
    }
}
