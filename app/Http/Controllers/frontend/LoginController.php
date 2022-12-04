<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(request $request)
    {

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,


        ]);
        return redirect()->back();
    }
    public function list(request $req)
    {

        $credentials = $req->except('_token');
        

        if (Auth::attempt($credentials))
         {
            return redirect()->route('home');
           
        }
        notify()->error('invalid ');
        return redirect()->back();
    }
}
