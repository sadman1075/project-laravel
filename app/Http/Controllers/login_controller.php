<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\registration;
use App\Http\Controllers\registration_controller;




class login_controller extends Controller
{
    //
    public function login()
    {
        return view('login');

    }
    public function login_store(Request $req)
    {

    $req->validate([

        'email'=>'required',
        'password'=>'required'


    ]);

    
     
if($registration->email==$req->email && $registration->password1==$req->password)
{
return vew('home');
}

else{
    return back()->with('failer','your email or password is incerrot');

}
    
    }
}
