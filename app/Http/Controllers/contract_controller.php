<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contract;


class contract_controller extends Controller
{
    //
    public function index(){
        return view ('contract');
    }
    public function store(Request $request){
        $request->validate([
'name'=>'required',
'email'=>'required|email',
'message'=>'required|min:5'


        ]);

        $contract=new contract;
        $contract->name=$request->name;
        $contract->email=$request->email;

        $contract->message=$request->message;
        $contract->save();

        return back()->with('success','form submitted successfully');


    }
    
}
