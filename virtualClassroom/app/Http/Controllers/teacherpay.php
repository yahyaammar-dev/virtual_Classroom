<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TeachersM;
use App\Models\teacherspay;

class teacherpay extends Controller
{
    public function teacherpay(REQUEST $req){

      $adminid = $req->adminid ; 
      $teacherid = $req->teacherid ;
            
      $fileModel = new teacherspay;
      if($req->file()) {
      
      

        $image = $req->file('file');
        $image_name = $image->getClientOriginalName();
        $image->move(public_path('/images'),$image_name);
    
        $image_path = "/images/" . $image_name;



         
          $fileModel->fileurl = $image_path;
          $fileModel->a_id = $adminid;
          $fileModel->t_id = $teacherid;
          $fileModel->save();
          echo "saved";
      }

    }
}