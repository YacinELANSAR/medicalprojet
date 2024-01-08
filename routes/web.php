<?php

use App\Http\Controllers\AuthDoctor;
use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\medicoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/home', function () {
    return view('guest');
})->name('guest');
Route::get('/test', function () {
    return view('test');
});


Route::middleware('auth')->group(function () {
    Route::delete('/logout', [AuthDoctor::class, 'logout'])->name('logout');
    Route::resource('doctors', DoctorController::class);
    Route::get('/doctor/profile',[DoctorController::class,'Profile'])->name('doctor.profile');
    Route::get('/doctor/profile/cv',[DoctorController::class,'downloadPDFDoctor'])->name('doctor.profile.cv');
    Route::get('/doctor/updatePassword',[DoctorController::class,'ShowFormUpdatePassword'])->name('updatePassword.show');
    Route::put('/doctor/updatePassword',[DoctorController::class,'UpdatePassword'])->name('updatePassword.post');
    Route::resource('/doctor/calendries', CalendrierController::class);
    Route::get('/doctor/Rendez_vous',[DoctorController::class,'Rendez_vous'])->name('Rendez_vous');
    
});
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthDoctor::class, 'showRegister'])->name('register.show');
    Route::post('/register', [AuthDoctor::class, 'register'])->name('register.post');

    Route::get('/login', [AuthDoctor::class, 'showLogin'])->name('login.show');
    Route::post('/login', [AuthDoctor::class, 'login'])->name('login.post');
});
Route::group(['prefix' => 'clients'],function(){
    Route::resource('/searche',ClientController::class);
});
#############################################################

Route::get('/login/{lang?}',[medicoController::class,'afficher_log']);

Route::get('/s/{lang?}',[medicoController::class,'afficher_searchacc'])->name('seach_account');

Route::post('/loginv/{lang?}',[medicoController::class,'valid_login'])->name('loginv');

Route::get('/Signup/{lang?}',[medicoController::class,'afficher_ins'])->name('Signup');
Route::post('/store',[medicoController::class,'insert_user'])->name('store');

Route::get('/Signin/{lang?}',[medicoController::class,'afficher_log'])->name('Signin');
Route::post('/valid_login',[medicoController::class,'valid_login'])->name('valid_login');

Route::view('/doctor-area','DoctorArea');
Route::view('/dr','account_doctor');
Route::get('/afficher_patients',[medicoController::class,'afficher_patients'])->name('afficher_patients');
Route::get('/client_list', [medicoController::class, 'searchPatients'])->name('searchPatients');

Route::get('/show_doctor/{jour?}', [medicoController::class, 'show_domand'])->name('sshow _domand');
Route::post('/demande_reservation', [medicoController::class, 'demande_reservation'])->name('demande_reservation');

