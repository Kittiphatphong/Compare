<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataNcc;
class ViewController extends Controller
{
    public function view(){
        return view('view')->with('nccData',DataNcc::paginate(100))->with('count',DataNcc::all()->count());
    }
    public function importFile(){
        return view('importFile');
    }

    public function compare(){
        return view('Compare');
    }
}
