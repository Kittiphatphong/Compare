<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\DataNccImport;
use App\Imports\DataUnitelImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ImportController extends Controller
{
    public function importNcc(Request $request)
    {
        set_time_limit(200);
        $request->validate([
            'import_ncc' => 'required',
            'import_unitel' => 'required'
        ]);
        $ncc= new DataNccImport();
        $unitel = new DataUnitelImport();
        Excel::import($ncc, request()->file('import_ncc')->store('temp'));
        Excel::import($unitel, request()->file('import_unitel')->store('temp'));

        return back()->with('success', 'All good!');
    }
}
