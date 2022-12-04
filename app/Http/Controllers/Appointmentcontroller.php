<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;

class Appointmentcontroller extends Controller
{
    public function list(){

        $apps=Appointment::all();
     


        return view('backend.pages.appointment.appointment',compact('apps'));
       
    }
public function create(){
    $doctors = Doctor::all();
    return view("backend.pages.appointment.create",compact("doctors"));
}
public function store(Request $req){

    Appointment::create([
        "user_id" => $req->user,
        "doctor_id" => $req->doctor_name,
        "fees" => $req->fees,
    ]);
    

    return redirect()->route("appointment");
}

public function deleteAppointment($id){

$app=Appointment::find($id);
$app->delete();
return redirect()->back();
   
}
 public function viewAppointment($id){
 $app=Appointment::find($id);
 return view('backend.pages.appointment.view',compact('app'));
 }
 public function edit($appointment_id)
     {
        $app=Appointment::find($appointment_id);
       
        return view('backend.pages.appointment.edit',);}




 
}
