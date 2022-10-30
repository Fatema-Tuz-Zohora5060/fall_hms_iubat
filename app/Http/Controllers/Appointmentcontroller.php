<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Appointmentcontroller extends Controller
{
    public function list(){
        return view("backend.pages.appointment.appointment");
    }
public function create(){
    
    return view("backend.pages.appointment.create");
}



}
