<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{

public function list(){

    return view('backend.pages.specialist.specialist');
}

public function form(){
    return view('backend.pages.specialist.specialist-create');
}
public function add(Request $req){

    Specialist::create([
        "specialized_id" => $req->specialized_id,
        "specialized_name" => $req->specialized_name,
        "specialized_department" => $req->specialized_department,
    ]);

        return redirect()->back();
}
}
