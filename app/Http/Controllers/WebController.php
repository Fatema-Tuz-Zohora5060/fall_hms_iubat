<?php

namespace App\Http\Controllers;

use App\Models\createWeb;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        return view('frontend.pages.home.home');
    }

    public function form(){

        return view('frontend.pages.appointment.appointment');
    }
    public function about(){
        return view('frontend.pages.about');
    }

    public function service(){
        return view('frontend.pages.service');
    }
    public function pages (){
        return view('frontend.pages.pages');
    }
    public function features (){
        //dd("barisal");
        return view('frontend.pages.features');
    
    }
    
    public function store(Request $req)
    {
        $req->validate(
            [
                "mobile" => "required|unique:mobile,mobile"
            ]
        );
        createWeb::create([
            "name" => $req->name,
            "mobile"=>$req->mobile,
            "date" => $req->date,
            "address" => $req->address,
            "email" => $req->email,
            
        ]);


        return redirect()->back()->with('message', 'form Created Successful.');
    }




    }


