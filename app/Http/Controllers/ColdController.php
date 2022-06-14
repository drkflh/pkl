<?php

namespace App\Http\Controllers;

use App\Exports\coldexport;
use App\Models\cold_storage;
use Maatwebsite\Excel\Facades\Excel;

class ColdController extends Controller
{
    public function cold()
    {
        $cold = cold_storage::get();
        return view('coldstorage',[
            'cold_storage' => $cold,
        ]);
    }
    public function exportcold()
    {
        return Excel::download(new coldexport, 'Data-Cold-Storage.xlsx');
    }
}
