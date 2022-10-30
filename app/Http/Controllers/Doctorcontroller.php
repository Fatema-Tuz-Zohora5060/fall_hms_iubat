<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Doctorcontroller extends Controller
{
    public function list(){
        return view("backend.pages.doctor.doctor");
    }
}
