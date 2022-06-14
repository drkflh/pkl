<?php

namespace App\Http\Controllers;

use App\Exports\metalexport;
use App\Models\metal_detector;
use Maatwebsite\Excel\Facades\Excel;

class MetalController extends Controller
{
    public function metal()
    {
        $metal = metal_detector::get();
        return view('metal',[
            'metal_detector' => $metal,
        ]);
    }
    public function exportmetal()
    {
        return Excel::download(new metalexport, 'Monitoring-Metal-Detector.xlsx');
    }
}