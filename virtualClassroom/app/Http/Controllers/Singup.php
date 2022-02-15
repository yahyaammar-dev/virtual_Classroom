<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminsM;
use App\Models\classroomsM;

class Singup extends Controller
{
    public function Singup(){

        $alladmin = AdminsM::all();
        $allclassrooms = classroomsM::all();

        return view('signup',
    [
        'admin'=>$alladmin,
        'classroom'=>$allclassrooms
    ]);
    }
}