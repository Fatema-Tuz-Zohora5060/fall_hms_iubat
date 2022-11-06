<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Doctorcontroller;
use App\Http\Controllers\Patientcontroller;
use App\Http\Controllers\Appointmentcontroller;
use App\Http\Controllers\Specialistcontroller;

Route::get('/',[homeController::class,"home"]);

Route::get('/contact',[homeController::class,"contact"]);

Route::get('/appointment',[Appointmentcontroller::class,"list"])->name("appointment");
Route::get('/appointment/create',[Appointmentcontroller::class,"create"]);
Route::post('/appointment/add',[Appointmentcontroller::class,"store"])->name('appointment.store');

Route::get('/doctor',[Doctorcontroller::class,"list"])->name("doctor");
Route::get('/doctor/create',[Doctorcontroller::class,"registration"])->name('doctor.create');
Route::post('/doctor/add',[Doctorcontroller::class,"store"])->name('doctor.store');

Route::get('/patients',[Patientcontroller::class,"list"]);

Route::get('/specialist',[Specialistcontroller::class,"list"]);
Route::get('/specialist/create',[Specialistcontroller::class,"form"])->name("specialist.form");
Route::post('/specialist/add',[Specialistcontroller::class,"add"])->name("specialist.add");