<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataNcc;
use DB;
class ViewController extends Controller
{
    public function view(){
        return view('view')->with('nccData',DataNcc::paginate(100))->with('count',DataNcc::all()->count());
    }
    public function importFile(){
        return view('importFile');
    }

    public function compare(){
        $datas= $users = DB::table('data_nccs')
            ->join('data_unitels', 'data_nccs.tel', '=', 'data_unitels.tel')
            ->select('data_nccs.tel as nccs')
            ->get();
        return view('Compare')
            ->with('datas',$datas);
    }
}
