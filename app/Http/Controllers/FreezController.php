<?php

namespace App\Http\Controllers;

use App\Models\freezing;
use Illuminate\Http\Request;
use App\Exports\freezingexport;
use Maatwebsite\Excel\Facades\Excel;

class FreezController extends Controller
{
    public function freez()
    {
        $freezing = freezing::get();
        return view('freezingmonitoring',[
            'freezing' => $freezing,
        ]);
    }
    public function exportfreezing()
    {
        return Excel::download(new freezingexport, 'Freezing-Monitoring-Record.xlsx');
    }
}
