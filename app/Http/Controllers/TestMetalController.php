<?php

namespace App\Http\Controllers;

use App\Models\test_metal;
use App\Exports\testmetalexport;
use Maatwebsite\Excel\Facades\Excel;

class TestMetalController extends Controller
{
    public function testmetal()
    {
        $metal = test_metal::get();
        return view('testmetal',[
            'test_metal' => $metal,
        ]);
    }
    public function exporttestmetal()
    {
        return Excel::download(new testmetalexport, 'Data-test-metal-detector.xlsx');
    }
}
