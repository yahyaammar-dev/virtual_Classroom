<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class makepayment extends Controller
{
    public function makepayment(){
        return view('paymentform');
    }
}
