<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Patientcontroller extends Controller
{
    public function list(){
        return view("backend.pages.patient.patient");
    }
}
