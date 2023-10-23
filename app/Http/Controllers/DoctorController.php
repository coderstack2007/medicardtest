<?php

namespace App\Http\Controllers;

use App\Models\Diagnos;

use App\Models\Doctors;
use App\Models\Friday;
use App\Models\Patients;
use App\Models\Resept;
use App\Models\Saturday;
use App\Models\Schedule;
use App\Models\Thursday;
use App\Models\Time;
use App\Models\Tuesday;
use App\Models\User;
use App\Models\Wensday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patients::all();
        $user = auth()->user();
        
        $doctor = Doctors::where('user_id', $user->id)->first();     
        $times = Time::where('doctor_id', $doctor->id)->where('booked', true)->with('user')->get();  
        $tuesdays = Tuesday::where('doctor_id', $doctor->id)->where('booked', true)->with('user')->get();
        $wensdays = Wensday::where('doctor_id', $doctor->id)->where('booked', true)->with('user')->get(); 
        $thursdays = Thursday::where('doctor_id', $doctor->id)->where('booked', true)->with('user')->get();
        $fridays = Friday::where('doctor_id', $doctor->id)->where('booked', true)->with('user')->get();
        $saturdays = Saturday::where('doctor_id', $doctor->id)->where('booked', true)->with('user')->get();
        return view('doctors.doctor', compact('user', 'doctor', 'times', 'tuesdays', 'wensdays', 'thursdays', 'fridays', 'saturdays', 'patients'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

     
    public function store(Request $request)
    {
    
        $patient = Patients::findOrFail($request->patient_id);  
          
        $user = User::findOrFail($request->user_id);
       
        $diagnoses = Diagnos::create([
            'status' => $request->status,
            'type' => $request->type,
            'des' => $request->des,
            'user_id' => $request->user_id,
            'patient_id' => $request->patient_id,
        ]);
    
       return redirect()->back();
    }

  

      
    
    public function show($id)
    {

        $doctor = Doctors::where('id', $id)->first();   
        $user = User::findOrFail($id);        
        // $patient = User::findOrFail($id);
        $times = Time::where('user_id', $user->id)->get();
        $tuesdays = Tuesday::where('user_id', $user->id)->get();
        $wensdays = Wensday::where('user_id', $user->id)->get();
        $thursdays = Thursday::where('user_id', $user->id)->get();
        $fridays = Friday::where('user_id', $user->id)->get();
        $saturdays = Saturday::where('user_id', $user->id)->get();
        return view('doctors.show', compact('doctor', 'tuesdays', 'times', 'wensdays', 'thursdays', 'fridays', 'saturdays'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $doctor = Doctors::find($id);
        return view('doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        // Get the post from the database
        $doctor = Doctors::find($id);

      
        // Validate the request
        $request->validate([
            'username' => 'required|string|max:255',
            'phone' => 'required',         
            'university' => 'required',
            'specialist' => 'required',
            'nationalid' => 'required',
            'designation' => 'required',
            'gender' => 'required',
            'date' => 'required',
        ]);
        
    
        // Update the post
        $doctor->username = $request->input('username');
        $doctor->department = $request->input('department');
        $doctor->university = $request->input('university');
        $doctor->specialist = $request->input('specialist');
        $doctor->nationalid = $request->input('nationalid');
        $doctor->designation = $request->input('designation');
        $doctor->phone = $request->input('phone');
        $doctor->gender = $request->input('gender');
        $doctor->date = $request->input('date');
        $doctor->save();
        

        // Redirect the user back to the post page
        return redirect()->route('doctorlist', $doctor->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doctor = Doctors::findOrFail($id);    
        $doctor->delete();
        return redirect()->route('doctorlist')->with('success', 'Doctor deleted successfully');
    }
    public function resept(Request $request)
    {
        $patient = Patients::findOrFail($request->patient_id);
        $user = User::findOrFail($request->user_id);
        $resepts = Resept::create([
            'category' => $request->category,
            'medicine' => $request->medicine,
            'des' => $request->des,
            'dosage' => $request->dosage,
            'prescribed' => $request->prescribed,
            'user_id' => $request->user_id,
            'patient_id' => $request->patient_id,
        ]);
        return redirect()->back();
    }
   
   
  
    
}
