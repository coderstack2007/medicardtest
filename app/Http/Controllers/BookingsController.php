<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctors;
use App\Models\Friday;
use App\Models\Patients;
use App\Models\Saturday;
use App\Models\Thursday;
use App\Models\Time;
use App\Models\Tuesday;
use App\Models\User;
use App\Models\Wensday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
   
    
    public function monday(Request $request)
{
    $timeId = $request->input('time_id');
   
    $time = Time::findOrFail($timeId);
    
    $user = User::findOrFail($time->user_id);
    $doctor = Doctors::findOrFail($time->doctor_id);

    // Check if the time slot is already booked by any user
    if ($time->booked) {
        if ($time->user_id == $request->user()->id) {
            echo "<script>alert('Время уже забронировано.');</script>";
            return back()->with('error', 'Вы уже забронировали время на этот день.');
        } else {
            echo "<script>alert('Время уже забронировано.');</script>";
            return back()->with('error', 'Это время уже забронировано другим пользователем.');
        }
    }

    // Check if the user has already booked a time slot for that day
    $existingBooking = Time::where('user_id', $request->user()->id)->where('doctor_id', $doctor->id)->where('booked', true)->first();
    if ($existingBooking) {
        echo "<script>alert('Вы уже забронировали время на этот день.');</script>";
        return back()->with('error', 'Вы уже забронировали время на этот день.');
    }

    $time->booked = true;
    $time->user_id = $request->user()->id; // Update the user_id for the booked time slot
    $time->save();

    return redirect()->back();
}
    public function wensday(Request $request, Wensday $wensday)
    {
        $wensdayId = $request->input('wensday_id');
        $wensday = Wensday::findOrFail($wensdayId);
    
        $user = User::findOrFail($wensday->user_id);
        $doctor = Doctors::findOrFail($wensday->doctor_id);
    
        // Check if the time slot is already booked by any user
        if ($wensday->booked) {
            if ($wensday->user_id == $request->user()->id) {
                echo "<script>alert('Время уже забронировано.');</script>";
                return back()->with('error', 'Вы уже забронировали время на этот день.');
            } else {
                echo "<script>alert('Время уже забронировано.');</script>";
                return back()->with('error', 'Это время уже забронировано другим пользователем.');
            }
        }
    
        // Check if the user has already booked a time slot for that day
        $existingBooking = Wensday::where('user_id', $request->user()->id)->where('doctor_id', $doctor->id)->where('booked', true)->first();
        if ($existingBooking) {
            echo "<script>alert('Вы уже забронировали время на этот день.');</script>";
            return back()->with('error', 'Вы уже забронировали время на этот день.');
        }
    
        $wensday->booked = true;
        $wensday->user_id = $request->user()->id; // Update the user_id for the booked time slot
        $wensday->save();
    
        return redirect()->back();
     
    }
    public function book(Request $request)
    {
        $timeId = $request->input('tuesday_id');
        $time = Tuesday::findOrFail($timeId);
        
        $user = User::findOrFail($time->user_id);
        $doctor = Doctors::findOrFail($time->doctor_id);
    
        // Check if the time slot is already booked by any user
        if ($time->booked) {
            if ($time->user_id == $request->user()->id) {
                echo "<script>alert('Время уже забронировано.');</script>";
                return back()->with('error', 'Вы уже забронировали время на этот день.');
            } else {
                echo "<script>alert('Время уже забронировано.');</script>";
                return back()->with('error', 'Это время уже забронировано другим пользователем.');
            }
        }
    
        // Check if the user has already booked a time slot for that day
        $existingBooking = Tuesday::where('user_id', $request->user()->id)->where('doctor_id', $doctor->id)->where('booked', true)->first();
        if ($existingBooking) {
            echo "<script>alert('Вы уже забронировали время на этот день.');</script>";
            return back()->with('error', 'Вы уже забронировали время на этот день.');
        }

        $time->booked = true;
        $time->user_id = $request->user()->id; // Update the user_id for the booked time slot
        $time->save();
    
        return redirect()->back();
    }
    public function thursday(Request $request, Thursday $wensday)
    {
        $wensdayId = $request->input('thursday_id');
        $wensday = Thursday::findOrFail($wensdayId);
    
        $user = User::findOrFail($wensday->user_id);
        $doctor = Doctors::findOrFail($wensday->doctor_id);
    
        // Check if the time slot is already booked by any user
        if ($wensday->booked) {
            if ($wensday->user_id == $request->user()->id) {
                echo "<script>alert('Время уже забронировано.');</script>";
                return back()->with('error', 'Вы уже забронировали время на этот день.');
            } else {
                echo "<script>alert('Время уже забронировано.');</script>";
                return back()->with('error', 'Это время уже забронировано другим пользователем.');
            }
        }
    
        // Check if the user has already booked a time slot for that day
        $existingBooking = Thursday::where('user_id', $request->user()->id)->where('doctor_id', $doctor->id)->where('booked', true)->first();
        if ($existingBooking) {
            echo "<script>alert('Вы уже забронировали время на этот день.');</script>";
            return back()->with('error', 'Вы уже забронировали время на этот день.');
        }
    
        $wensday->booked = true;
        $wensday->user_id = $request->user()->id; // Update the user_id for the booked time slot
        $wensday->save();
    
        return redirect()->back();
     
    }
    public function friday(Request $request, Friday $wensday)
    {
        $wensdayId = $request->input('friday_id');
        $wensday = Friday::findOrFail($wensdayId);
    
        $user = User::findOrFail($wensday->user_id);
        $doctor = Doctors::findOrFail($wensday->doctor_id);
    
        // Check if the time slot is already booked by any user
        if ($wensday->booked) {
            if ($wensday->user_id == $request->user()->id) {
                echo "<script>alert('Время уже забронировано.');</script>";
                return back()->with('error', 'Вы уже забронировали время на этот день.');
            } else {
                echo "<script>alert('Время уже забронировано.');</script>";
                return back()->with('error', 'Это время уже забронировано другим пользователем.');
            }
        }
    
        // Check if the user has already booked a time slot for that day
        $existingBooking = Friday::where('user_id', $request->user()->id)->where('doctor_id', $doctor->id)->where('booked', true)->first();
        if ($existingBooking) {
            echo "<script>alert('Вы уже забронировали время на этот день.');</script>";
            return back()->with('error', 'Вы уже забронировали время на этот день.');
        }
    
        $wensday->booked = true;
        $wensday->user_id = $request->user()->id; // Update the user_id for the booked time slot
        $wensday->save();
    
        return redirect()->back();
     
    }
    public function saturday(Request $request, Saturday $wensday)
    {
        $wensdayId = $request->input('saturday_id');
        $wensday = Saturday::findOrFail($wensdayId);
    
        $user = User::findOrFail($wensday->user_id);
        $doctor = Doctors::findOrFail($wensday->doctor_id);
    
        // Check if the time slot is already booked by any user
        if ($wensday->booked) {
            if ($wensday->user_id == $request->user()->id) {
                echo "<script>alert('Время уже забронировано.');</script>";
                return back()->with('error', 'Вы уже забронировали время на этот день.');
            } else {
                echo "<script>alert('Время уже забронировано.');</script>";
                return back()->with('error', 'Это время уже забронировано другим пользователем.');
            }
        }
    
        // Check if the user has already booked a time slot for that day
        $existingBooking = Saturday::where('user_id', $request->user()->id)->where('doctor_id', $doctor->id)
        ->where('booked', true)->first();
        if ($existingBooking) {
            echo "<script>alert('Вы уже забронировали время на этот день.');</script>";
            return back()->with('error', 'Вы уже забронировали время на этот день.');
        }
    
        $wensday->booked = true;
        $wensday->user_id = $request->user()->id; // Update the user_id for the booked time slot
        $wensday->save();
    
        return redirect()->back();
     
    }
    public function mondel(Request $request)
{
    $timeId = $request->input('time_id');
    $time = Time::findOrFail($timeId);
    
    $user = User::findOrFail($time->user_id);
    $doctor = Doctors::findOrFail($time->doctor_id);

    $time->booked = false;
    $time->user_id = $request->user()->id; // Update the user_id for the booked time slot
    $time->save();

    return redirect()->back();
}
public function tuedel(Request $request)
{
    $tuesdayId = $request->input('tuesday_id');
    $tuesday = Tuesday::findOrFail($tuesdayId);
    $user = User::findOrFail($tuesday ->user_id);
    $doctor = Doctors::findOrFail($tuesday ->doctor_id);

    $tuesday ->booked = false;
    $tuesday ->user_id = $request->user()->id; // Update the user_id for the booked time slot
    $tuesday ->save();

    return redirect()->back();
}
public function wendel(Request $request)
{
    $timeId = $request->input('wensday_id');
    $time = Wensday::findOrFail($timeId);
    
    $user = User::findOrFail($time->user_id);
    $doctor = Doctors::findOrFail($time->doctor_id);

    $time->booked = false;
    $time->user_id = $request->user()->id; // Update the user_id for the booked time slot
    $time->save();

    return redirect()->back();
}
public function thudel(Request $request)
{
    $timeId = $request->input('thursday_id');
    $time = Thursday::findOrFail($timeId);
    
    $user = User::findOrFail($time->user_id);
    $doctor = Doctors::findOrFail($time->doctor_id);

    $time->booked = false;
    $time->user_id = $request->user()->id; // Update the user_id for the booked time slot
    $time->save();

    return redirect()->back();
}
public function fridel(Request $request)
{
    $timeId = $request->input('friday_id');
    $time = Friday::findOrFail($timeId);
    
    $user = User::findOrFail($time->user_id);
    $doctor = Doctors::findOrFail($time->doctor_id);

    $time->booked = false;
    $time->user_id = $request->user()->id; // Update the user_id for the booked time slot
    $time->save();

    return redirect()->back();
}
public function satdel(Request $request)
{
    $timeId = $request->input('saturday_id');
    $time = Saturday::findOrFail($timeId);
    
    $user = User::findOrFail($time->user_id);
    $doctor = Doctors::findOrFail($time->doctor_id);

    $time->booked = false;
    $time->user_id = $request->user()->id; // Update the user_id for the booked time slot
    $time->save();

    return redirect()->back();
}
   

     
}
