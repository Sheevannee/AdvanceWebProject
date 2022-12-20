<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeControl extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function redirectFunct()
    {
        $typeuser=Auth::user()->usertype;

        if($typeuser=='1')
        {
            return view('home1');
        }

        elseif($typeuser=='0')
        {
            return view('home2');
        }
    }

    public function coordinatorHome()
    {
        return view('coordinator.coordinatorpanelpage');
    }

    public function supervisorHome()
    {
        return view('supervisor.supervisorpanelpage');
    }
}

