<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientPagesController extends Controller
{
    public function calendar() 
    {
        return view('ppages.calendar');
    }
    public function patient()
    {
        return view('ppages.patient');
    }
    public function nurses()
    {
        return view('ppages.nurses');
    }
    public function moders() 
    {
        return view('ppages.moders');
    }
    public function pills()
    {
        return view('ppages.pills');
    }
    public function inbox()
    {
        return view('ppages.inbox');
    }
}
