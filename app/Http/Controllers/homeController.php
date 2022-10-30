<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        return view("backend.pages.dashboard");

    }

    public function contact(){
        return view("backend.pages.contact");

    }
    
}
