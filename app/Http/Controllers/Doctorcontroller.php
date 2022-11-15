<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class Doctorcontroller extends Controller
{
    public function list(){
        
//    $dogs=Doctor::all();

    $dogs = Doctor::paginate(5);
    
// dd($dogs);
        return view("backend.pages.doctor.doctor",compact('dogs'));
    
        
    }


    public function registration(){
        return view("backend.pages.doctor.create");

        
    }




    public function store(Request $req){
      
        // dd($req->doctorNumber);
//dd($req->all());
        
        $req->validate(
            [
                "doctorNumber" => "required|unique:doctors,number" 
            ]
        );
 //dd($req ->all());
 
 $fileName=null;
        if($req->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$req->file('image')->getClientOriginalExtension();
            $req->file('image')->storeAs('/uploads',$fileName);
        }
       
        Doctor::create([
            "doctor_name" => $req->doctorName,
            "image"=>$fileName,
            "number" => $req->doctorNumber,
            "address" => $req->doctorAddress,
            "fees" => $req->fees
        ]);
        
        return redirect()->back()->with('message','form Created Successful.');


    }
   
}



