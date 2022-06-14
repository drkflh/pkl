<?php

namespace App\Http\Controllers;

use App\Models\temperatur;
use App\Exports\coldtemexport;
use Maatwebsite\Excel\Facades\Excel;

class ColdTemController extends Controller
{
    public function temp()
    {
        $temperatur = temperatur::get();
        return view('coldtemperatur',[
            'temperatur' => $temperatur,
        ]);
    }
    public function exporttemp()
    {
        return Excel::download(new coldtemexport, 'Data-Cold-Storage-Temperatur.xlsx');
    }
}
