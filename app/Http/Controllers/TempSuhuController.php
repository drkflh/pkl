<?php

namespace App\Http\Controllers;

use App\Models\temperature_suhu;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\temperatursuhuexport;

class TempSuhuController extends Controller
{
    public function tempsuhu()
    {
        $udang = temperature_suhu::get();
        return view('tempudang',[
            'temperature_suhu' => $udang,
        ]);
    }
    public function exporttempsuhu()
    {
        return Excel::download(new temperatursuhuexport, 'Data-Temperature-Suhu-Udang.xlsx');
    }
}
