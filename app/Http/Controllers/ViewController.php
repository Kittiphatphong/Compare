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
        $Nccdatas= $users = DB::table('data_nccs')
            ->join('')
            ->select('data_nccs.tel as telN',
//                DB::raw('sum(data_nccs.amount) as sumNcc')
)
//            ->groupBy('data_nccs.tel')
            ->get();
        dd($Nccdatas);
//        return view('Compare')
////            ->with('Uniteldatas',$Uniteldatas)
//            ->with('Nccdatas',$Nccdatas);
    }
}
