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
          $fileName = time().'_'.$req->file->getClientOriginalName();
          $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
          $fileModel->fileurl = '/storage/' . $filePath;
          $fileModel->a_id = $adminid;
          $fileModel->t_id = $teacherid;
          $fileModel->save();
          echo "saved";
      }

    }
}