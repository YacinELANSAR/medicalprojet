<?php

use App\Http\Controllers\AuthDoctor;
use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecherchController;
use App\Http\Controllers\medicoController;
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
});
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthDoctor::class, 'showRegister'])->name('register.show');
    Route::post('/register', [AuthDoctor::class, 'register'])->name('register.post');

    Route::get('/login', [AuthDoctor::class, 'showLogin'])->name('login.show');
    Route::post('/login', [AuthDoctor::class, 'login'])->name('login.post');
});
Route::post('/doctorvilledeppartement',[medicoController::class,'afficherDoctor'])->name('afficherdoctor');
Route::get('/afficherdoctor',[RecherchController::class,'afficher'])->name('afficherdoctor');
Route::post('/rd',[RecherchController::class,'rechercher'])->name('rd');
Route::get('/modifierc',function(){
    return view('pagemodifierclient');
});
Route::get('/backtorecherche',function(){
    return view('RECHERCHER');
});
Route::get('/tester', function () {
    return view('RECHERCHER');
});

