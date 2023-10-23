<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function login() 
    {
        return view('auth.login');
    }
    public function register() 
    {
        return view('auth.register');

    }  
      public function Patient(Request $request) 
    {
 
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect()->intended('/patients/');
        }
        else {

            return ("Error");
        }
    
    }
    public function Doctor(Request $request) 
    {
 
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        $credentials['username'] = 'Dr.' . $credentials['username'];
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect()->intended('/doctors/');
        }
        else {

            return ("Error");
        }
    
    }
    public function Moder(Request $request) 
    {
        
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect()->intended('/moderators/');
        }
        else {
            return ("Error");
        }
    }
    public function logout(Request $request) 
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }


}

    

