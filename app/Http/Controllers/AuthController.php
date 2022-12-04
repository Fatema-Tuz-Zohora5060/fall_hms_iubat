<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.pages.login.login');
    }
    public function store(Request $req){

 
        $credential=$req->except('_token');
        Auth::attempt($credential);
        if(auth()->user()){

            return redirect()->route("admin");
        }
        else {
            return redirect()->back();
        }
    }


}
