<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subadmin extends Controller
{
    public function subadmin(){
        return view("subadmins");
    }
}
