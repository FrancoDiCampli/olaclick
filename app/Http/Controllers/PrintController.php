<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function printView(){
        return view('print');
    }
}
