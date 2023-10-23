<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TimeController;
use App\Models\Doctors;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\Patientscontroller;
use App\Http\Controllers\ModerController;
use App\Http\Controllers\ModeratorPagesController;
use App\Http\Controllers\PatientPagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





# PageController

#AuthContrller
Route::get('/', [AuthController::class, 'login'])->name('login')->middleware('throttle:5');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register'])->name('register')->middleware('throttle:5');
Route::post('Patient', [AuthController::class, 'Patient'])->name('Patient');
Route::post('Doctor', [AuthController::class, 'Doctor'])->name('Doctor');
Route::post('Moder', [AuthController::class, 'Moder'])->name('Moder');


Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::delete('destroys/{id}', [DoctorController::class, 'destroy'])->name('destroying');
Route::get('/patient-list', [ModerController::class, 'patientlist'])->name('patientlist');
Route::get('/doctor-list', [ModerController::class, 'doctorlist'])->name('doctorlist');
Route::post('/Diagnosis', [DoctorController::class, 'store'])->name('diagnos');
Route::post('/Recept', [DoctorController::class, 'resept'])->name('resept');
Route::delete('/patients/{id}', [PatientsController::class, 'destroy'])->name('destroy');
Route::put('/doctors/{doctor}', [DoctorController::class, 'update'])->name('doctors.update');
Route::put('/patients/{id}/edit', [PatientsController::class, 'updateresept'])->name('updateresepts');
Route::delete('destroy/{id}', [PatientsController::class, 'deleteresept'])->name('deleteresept');
Route::put('/diagnos/{id}/edit', [PatientsController::class, 'updatediagnos'])->name('updatediagnos');
Route::delete('diagnos/{id}', [PatientsController::class, 'deletediagnos'])->name('deletediagnos');


#Time

Route::post('tuesday', [BookingsController::class, 'book'])->name('book');
Route::post('monday', [BookingsController::class, 'monday'])->name('monday');
Route::post('wensday', [BookingsController::class, 'wensday'])->name('wensday');
Route::post('thursday', [BookingsController::class, 'thursday'])->name('thursday');
Route::post('friday', [BookingsController::class, 'friday'])->name('friday');
Route::post('saturday', [BookingsController::class, 'saturday'])->name('saturday');
Route::post('mon', [BookingsController::class, 'mondel'])->name('mondel');
Route::post('tues', [BookingsController::class, 'tuedel'])->name('tuedel');
Route::post('wens', [BookingsController::class, 'wendel'])->name('wendel');
Route::post('thurs', [BookingsController::class, 'thudel'])->name('thudel');
Route::post('fri', [BookingsController::class, 'fridel'])->name('fridel');
Route::post('satur', [BookingsController::class, 'satdel'])->name('satdel');
Route::get('/create-doctor', [ModerController::class, 'create_doctor'])->name('create_doctor');
Route::get('/create-doctors', [ModerController::class, 'create_doctors'])->name('create_doctors');
Route::get('moders/create', [ModerController::class, 'create'])->name('moder.create');
Route::resources([
    'doctors' => DoctorController::class,
    'moderators' => ModerController::class,
    'patients' => PatientsController::class,
]);


// Route::get('/patients/{patient}/', [PatientsController::class, 'index'])->name('patients');
Route::get('/doctors/{id}',[DoctorController::class, 'show'])->middleware('checkUserType');



