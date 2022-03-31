<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Rawilk\Printing\Facades\Printing;
use Rawilk\Printing\Receipts\ReceiptPrinter;

class PrintController extends Controller
{
    public function printView(){

        // Printing::newPrintTask()
        // ->printer(71219229)
        // ->content('hello world')
        // ->send();
        // return 'dine';
        $invoice['id'] = 1;
        $invoice['article'] = 'Remera';
        $invoice['qty'] = 1;
        $invoice['price'] = 15;
        return view('invoice',compact('invoice'));
    }

    public function printWeb(){
        // Printing::newPrintTask()
        // ->printer(71219229)
        // ->content('hello world')
        // ->send();
        // return 'dine';
        dd('done');
        $printerId = 71219233;
        $printJob = Printing::newPrintTask()
                    ->file(public_path().'/images/test.pdf')
                    ->printer($printerId)
                    ->send();
    }
}
