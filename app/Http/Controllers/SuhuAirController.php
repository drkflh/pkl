<?php

namespace App\Http\Controllers;

use App\Models\suhu_air;
use Illuminate\Http\Request;
use App\Exports\suhuairexport;
use Maatwebsite\Excel\Facades\Excel;

class SuhuAirController extends Controller
{
    public function suhuair()
    {
        $air = suhu_air::get();
        return view('pencatatanair',[
            'suhu_air' => $air,
        ]);
    }
    public function exportsuhuair()
    {
        return Excel::download(new suhuairexport, 'Pencacatan-Suhu-air.xlsx');
    }
}
