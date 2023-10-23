<?php

namespace App\Http\Controllers;



use App\Models\Diagnos;
use App\Models\Patients;
use App\Models\Resept;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class Patientscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
  
     public function  __construct()
     {
        $this->middleware('auth');
     }
     public function index()
     {
        
        $user = auth()->user();  
        $diagnoses = Diagnos::all();
        $patients = Patients::all();
        $patient = $patients->where('user_id', $user->id)->first();
     
        return view('patients.patient', compact( 'diagnoses', 'user', 'patient', 'patients'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id, User $user)
{
   
 

   
    if (auth()->user()->type == 'patient') {
        return redirect('/');
    }
    $user = User::findOrFail($id);

    $patient = Patients::where('id', $id)->first();
    $diagnoses = Diagnos::where('user_id', $user->id)->get();
   
    $resepts = Resept::where('user_id', $user->id)->get();

    $resept = Resept::find($id);
    $diagnos = Diagnos::find($id);

    return view('patients.show')->with([
        'patient' => $patient,
        'diagnoses' => $diagnoses,
        'diagnos' => $diagnos,
        'resepts' => $resepts,
        'user' => $user,
        'resept' => $resept,
    ]);
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $patient = Patients::find($id);

        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        // Get the post from the database
        $patient = Patients::find($id);
    
        // Validate the request
        $request->validate([
            'username' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required',
            'blood' => 'required',
            'gender' => 'required|string|max:255',
            'date' => 'required',
            'height' => 'required',
            'weight' => 'required',  
            'nationality' => 'required',     
            'factor' => 'required',  

        ]);
    
        // Update the post
        $patient->username = $request->input('username');
        $patient->phone = $request->input('phone');
        $patient->address = $request->input('address');
        $patient->blood = $request->input('blood');
      
        $patient->gender = $request->input('gender');
        $patient->date = $request->input('date');
        $patient->height = $request->input('height');
        $patient->weight = $request->input('weight');
        $patient->nationality = $request->input('nationality');
        $patient->factor = $request->input('factor');
        $patient->save();
    
        // Redirect the user back to the post page
        return redirect()->route('patientlist', $patient->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $patient = Patients::findOrFail($id);
    
    
        $patient->delete();


        return redirect()->route('patientlist')->with('success', 'Patient deleted successfully');
    }
    public function updateresept(Request $request, $id)
    {
        $resept = Resept::find($id);
        
        $request->validate([
            'category' => 'required',
            'medicine' => 'required',
            'des' => 'required',
            'dosage' => 'required',
            'prescribed' => 'required',
        ]);

        $resept->category = $request->input('category');
        $resept->medicine = $request->input('medicine');
        $resept->des = $request->input('des');
        $resept->prescribed = $request->input('prescribed');  
        $resept->dosage = $request->input('dosage');
        $resept->save();  
        return redirect()->back();
    }
   
    public function  deleteresept($id)
    {
        $resept = Resept::findOrFail($id);       
        $resept->delete();

        return redirect()->back();
    }


    public function updatediagnos(Request $request, $id)
    {
        
        $diagnos = Diagnos::findOrFail($id);
      
        $request->validate([
     
            'des' => 'required',
            'type' => 'required',
            'status' => 'required',
        ]);

        $diagnos->des = $request->input('des');
        $diagnos->type = $request->input('type');
        $diagnos->status = $request->input('status');
        $diagnos->save();
        return redirect()->back();
    }
    public function  deletediagnos($id)
    {
        $resept = Diagnos::findOrFail($id);       
        $resept->delete();

        return redirect()->back();
    }
}
