<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function printView(){
        $invoice['id'] = 1;
        $invoice['article'] = 'Remera';
        $invoice['qty'] = 1;
        $invoice['price'] = 15;
        return view('invoice',compact('invoice'));
    }
}
