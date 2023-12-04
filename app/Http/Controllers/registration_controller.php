<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\registration;


class registration_controller extends Controller
{
    //
    public function register(){
        return view('registration');
    }
    public function register_store(Request $request){

        $request->validate([
            'name'=>'required',
'email'=>'required',
'addres'=>'required',
'city'=>'required',
'state'=>'required',
'password'=>'required',
'password1'=>'required'
        ]);

        $registration=new registration;
        $registration->name=$request->name;
        $registration->email=$request->email;
        $registration->address=$request->addres;
        $registration->city=$request->city;
        $registration->state=$request->state;
        $registration->password1=$request->password;
        $registration->password2=$request->password1;

        if($registration->password1==$registration->password2)
        {
        $registration-> save();
        return redirect('home');
        }
        else{
            return back()->with('failer','your password and confirm password is not same');

        }

        
        
    }
}
