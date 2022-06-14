<?php

namespace App\Http\Controllers;

use App\Models\udang;
use App\Exports\udangexport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function index()
    {
        $udang = udang::get();
        return view('index',[
            'udang' => $udang,
        ]);
    }
    public function exportudang()
    {
        return Excel::download(new udangexport, 'Data-Udang.xlsx');
    }
}
