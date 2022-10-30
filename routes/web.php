<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Doctorcontroller;
use App\Http\Controllers\Patientcontroller;
use App\Http\Controllers\MedicalRecordscontroller;
use App\Http\Controllers\Appointmentcontroller;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('backend.master');
});

Route::get('/',[homeController::class,"home"]);

Route::get('/contact',[homeController::class,"contact"]);

Route::get('/appointment',[Appointmentcontroller::class,"list"]);
Route::get('/appointment/create',[Appointmentcontroller::class,"create"]);

Route::get('/doctor',[Doctorcontroller::class,"list"]);
Route::get('/patients',[Patientcontroller::class,"list"]);
Route::get('/medicalRecords',[MedicalRecordscontroller::class,"list"]);

