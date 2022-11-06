<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class Doctorcontroller extends Controller
{
    public function list(){

       

$dogs=Doctor::all();

//dd($dogs);
        return view("backend.pages.doctor.doctor",compact('dogs'));
    
        
    }


    public function registration(){
        return view("backend.pages.doctor.create");

        
    }




    public function store(Request $req){
      
        // dd($req->doctorNumber);
        Doctor::create([
            "doctor_name" => $req->doctorName,
            "number" => $req->doctorNumber,
            "address" => $req->doctorAddress,
            "fees" => $req->fees
        ]);
        return redirect()->back();

    }
   
}



