<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\classroom_lectures;
use App\Models\lectures;
use DB;

class classstream extends Controller
{
    public function classstream(REQUEST $req){
        $myid = $req->id;

        $lectures_id = classroom_lectures::all()->where('classroom_id', $myid);

        
        $lects = [];

        foreach($lectures_id as $id){
            $temp = DB::table('lecture')->where('id', $id["id"])->get();
            array_push($lects,$temp);
        }
        
        return view('stream',[
            "lectures"=>$lects,
            "classid"=>$myid
        ]);

    }
}