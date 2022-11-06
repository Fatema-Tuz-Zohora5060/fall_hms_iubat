<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class Appointmentcontroller extends Controller
{
    public function list(){

        $apps=Appointment::all();
     


        return view('backend.pages.appointment.appointment',compact('apps'));
       
    }
public function create(){
    
    return view("backend.pages.appointment.create");
}
public function store(Request $req){

    Appointment::create([
        "user_id" => $req->user,
        "doctor_id" => $req->doctor_id,
        "fees" => $req->fees,
    ]);

    return redirect()->route("appointment");
}



}
