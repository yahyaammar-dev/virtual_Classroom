<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\payments;
use App\Models\AdminsM;
use App\Models\Student;



use DB;


class submitpayment extends Controller
{
    public function submitpayment(REQUEST $req){
        

        if(session('user')["type"]=="subadmin") {
            $type="subadmin";
            $id = session('user')["id"];
            $fileModel = new payments;
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->fileurl = '/storage/' . $filePath;
            $fileModel->idofpayee = $id;
            $fileModel->type = $type;
            $fileModel->admin = "admin";
            $fileModel->save();
            echo "saved";
        }
        }


     

        if(session("user")["type"]=="student"){
            $type="student";
            $id = session('user')["id"];

          
            $admin =  session("user")["course"];            

            $fileModel = new payments;
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->fileurl = '/storage/' . $filePath;
            $fileModel->idofpayee = $id;
            $fileModel->type = $type;
            $fileModel->admin = $admin;
            $fileModel->save();
            echo "saved";
        }
        }
    }
}
