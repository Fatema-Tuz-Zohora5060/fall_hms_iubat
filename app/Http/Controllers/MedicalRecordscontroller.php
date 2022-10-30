<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalRecordscontroller extends Controller
{
    public function list(){
        return view("backend.pages.medicalReport.medicalReport");
    }
}
