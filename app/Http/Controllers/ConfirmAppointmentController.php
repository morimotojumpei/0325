<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmAppointmentController extends Controller
{
    public function show(Request $request) 
    {
        return view('/confirm_appointment',compact('request'));
    }
}
