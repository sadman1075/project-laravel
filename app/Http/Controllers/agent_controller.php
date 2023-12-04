<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class agent_controller extends Controller
{
    //
    public function agent_dashboard()
    {
        return view('agent.agent_dashboard');
    }
}
