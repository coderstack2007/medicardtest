<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function calendar() 
    {
        return view('pages.calendar');
    }
    public function patient()
    {
        return view('pages.patient');
    }
    public function nurses()
    {
        return view('pages.nurses');
    }
    public function moders() 
    {
        return view('pages.moders');
    }
    public function pills()
    {
        return view('pages.pills');
    }
    public function inbox()
    {
        return view('pages.inbox');
    }
}
