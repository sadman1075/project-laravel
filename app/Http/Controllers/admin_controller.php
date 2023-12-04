<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admin_controller extends Controller
{
    //
    public function admin_dashboard(){
        return view('admin');
    }
}
