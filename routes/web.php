<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Doctorcontroller;
use App\Http\Controllers\Patientcontroller;
use App\Http\Controllers\Appointmentcontroller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontend\AppointmentController as FrontendAppointmentController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\WebController;
//frontend routes--
Route::get('/', [WebController::class, "home"])->name('home');

Route::post('/registration/store', [LoginController::class, "store"])->name("frontend.registration");
Route::post('/login/user', [LoginController::class, "list"])->name("user.login");
Route::get('/about',[WebController::class,"about"])->name('about');
Route::get('/service',[WebController::class,"service"])->name('service');
Route::get('/pages',[WebController::class,"pages"])->name('pages');
Route::get('/pages/features',[WebController::class,"features"])->name('features');
Route::get('/pages/doctor',[WebController::class,"pages"])->name('pages');

Route::get('/pages',[WebController::class,"pages"])->name('pages');

Route::group(["middleware" => 'auth', 'prefix' => 'admin'], function () {
Route::get('/appointment', [FrontendAppointmentController::class, "list"])->name("appointment");
Route::get('/user/appointment', [WebController::class, "form"])->name('appointment.form');
Route::post('/user/appointment/submit', [WebController::class, "store"])->name('appointment.form.submit');

});

//--backend routes--

Route::get('/login', [AuthController::class, "login"])->name("login");
Route::post('/login/store', [AuthController::class, "store"])->name("login.store");


Route::group(["middleware" => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', [homeController::class, "home"])->name("admin");

    Route::get('/contact', [homeController::class, "contact"]);
    Route::get('/appointment', [Appointmentcontroller::class, "list"])->name("appointment");
    Route::get('/appointment/create', [Appointmentcontroller::class, "create"])->name("appointment.create");
    Route::post('/appointment/add', [Appointmentcontroller::class, "store"])->name('appointment.store');
    Route::get('/appointment/delete/{appointment_id}', [Appointmentcontroller::class, 'deleteAppointment'])->name('admin.appointment.delete');
    Route::get('/appointment/edit/{appointment_id}', [Appointmentcontroller::class, 'editAppointment'])->name('admin.appointment.edit');

    Route::get('/doctor', [Doctorcontroller::class, "list"])->name("doctor");
    Route::get('/doctor/create', [Doctorcontroller::class, "registration"])->name('doctor.create');
    Route::post('/doctor/add', [Doctorcontroller::class, "store"])->name('doctor.store');
    Route::get('/doctor/delete/{doctor_id}', [Doctorcontroller::class, 'deleteDoctor'])->name('admin.doctor.delete');
    Route::get('/doctor/view/{doctor_id}', [Doctorcontroller::class, 'viewDoctor'])->name('doctor.view');

    Route::get('/doctor/edit/{doctor_id}', [Doctorcontroller::class, 'edit'])->name('doctor.edit');
    Route::put('/doctor/update/{doctor_id}', [Doctorcontroller::class, 'update'])->name('doctor.update');


    Route::get('/patients', [Patientcontroller::class, "list"])->name('patients');


    Route::get('/History', [HistoryController::class, 'list'])->name('history');

    Route::get('/specialist', [SpecialistController::class, 'list'])->name('specialist');

    Route::get('/specialist/form', [SpecialistController::class, 'form'])->name('specialist.form');

    Route::post('/specialist/form/add', [SpecialistController::class, 'store'])->name('specialist.form.store');
    Route::get('/specialist/view/{specialist_id}',[SpecialistController::class,'specialist.view']);

});
