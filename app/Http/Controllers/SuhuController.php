<?php

namespace App\Http\Controllers;

use App\Models\suhu_udang;
use App\Exports\suhuexport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SuhuController extends Controller
{
    public function suhu()
    {
        $udang = suhu_udang::get();
        return view('suhuudang',[
            'suhu_udang' => $udang,
        ]);
    }
    public function exportsuhu()
    {
        return Excel::download(new suhuexport, 'Data-Suhu-Udang.xlsx');
    }
}
