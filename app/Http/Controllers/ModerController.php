<?php

namespace App\Http\Controllers;

use App\Models\Bloods;
use App\Models\Doctors;
use App\Models\Friday;
use App\Models\Moder;
use App\Models\Saturday;
use App\Models\Thursday;
use App\Models\Time;
use App\Models\Tuesday;
use App\Models\Wensday;
use Illuminate\Http\Request;
use App\Models\Patients;
use App\Models\User;

class ModerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patients::all();
        return view('moderators.moderator')->with([
            'patients' => $patients,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( )
    {
        return view('moderators.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $patients = Patients::all();
        
        $users = User::all();
        $userCount = $users->count();
        $userId = $userCount + 1;

        
        $patients = Patients::create([
            'username' => $request->username,
            'phone' => $request->phone,
            'address' => $request->address, 
            'password' => bcrypt($request->password),
            'blood' => $request->blood, 
            'date' => $request->date,
            'height' => $request->height,
            'weight' => $request->weight,
            'factor' => $request->factor,
            'gender' => $request->gender,
            'nationality' => $request->nationality,
            'user_id' => $userId,
        ]); 
        $users = User::create([
            'username' => $request->username,
            'type' => 'patient',
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('patientlist');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $patient = Patients::find($id);
        return view('moderators.show')->with([
            'patient' => $patient,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
public function patientlist(Patients $patients)
{
    $patients = Patients::all();
    $users = User::all();
    
    return view('moderators.patientlist',  ['patients' => $patients, 'users' => $users  ]);

}
public function doctorlist()
{ 
    $doctors = Doctors::all();
    return view('moderators.doctorlist', ['doctors' => $doctors]);
}

public function create_doctor()
{
    return view('moderators.create_doctor');
}

public function create_doctors(Request $request)
{
    $users = User::all();
    $userCount = $users->count();
    $userId = $userCount + 1;
    $doctor = Doctors::all();
    $doctorCount = $doctor->count();
    $doctorId = $doctorCount + 1;
    $doctors = Doctors::create([
        'username' => 'Dr. ' . $request->username,
        'phone' => $request->phone,
        'gender' => $request->gender,
        'department' => $request->department,
        'university' => $request->university,
        'date' => $request->date,
        'specialist' => $request->specialist,
        'nationalid' => $request->nationalid,
        'designation' => $request->designation,
        'user_id' => $userId,
    ]);
    $users = User::create([
        'username' =>  'Dr.' . $request->username,
        'type' => 'doctor',
        'password' => bcrypt($request->password),
    ]);

    $time = Time::create([
        'slot' => '9:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    $time = Time::create([
        'slot' => '10:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    $time = Time::create([
        'slot' => '11:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);

    $tuesday = Tuesday::create([
        'slot' => '9:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    $tuesday = Tuesday::create([
        'slot' => '10:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    $tuesday = Tuesday::create([
        'slot' => '11:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);

    $wensday = Wensday::create([
        'slot' => '9:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    $wensday = Wensday::create([
        'slot' => '10:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    $wensday = Wensday::create([
        'slot' => '11:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    $thursdays = Thursday::create([
        'slot' => '9:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    $thursdays = Thursday::create([
        'slot' => '10:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    $thursdays = Thursday::create([
        'slot' => '11:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    $fridays = Friday::create([
        'slot' => '9:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    $fridays = Friday::create([
        'slot' => '10:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    $fridays = Friday::create([
        'slot' => '11:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    $saturdays = Saturday::create([
        'slot' => '9:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    $saturdays = Saturday::create([
        'slot' => '10:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    $saturdays = Saturday::create([
        'slot' => '11:00',
        'doctor_id' => $doctorId,
        'user_id' => $userId,
    ]);
    
    return redirect()->route('doctorlist');
}
}
