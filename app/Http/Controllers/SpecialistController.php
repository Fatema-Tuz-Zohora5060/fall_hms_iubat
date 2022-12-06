<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{

public function list (){
    $list=Specialist::paginate(2);

    return view("backend.pages.specialist.specialist",compact('list'));
}

public function form(){
    
    
  
 return view("backend.pages.specialist.specialist-create");
}
   

public function store(Request $req){
    Specialist::create([
        "id" => $req->id,
        "name" =>$req->name,
        "status" => $req->status,
        "specialist_at" => $req->specialist_at,
        
    ]);
    return redirect()->route('specialist');

}

}
