<?php

use App\Http\Controllers\AuthDoctor;
use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ReviewController::class, 'index'])->name('homepage');
Route::post('/', [ReviewController::class, 'store'])->name('commentaires.store');



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
    Route::get('/doctor/reservations', [ReservationController::class, 'index'])->name('reservation.index');
Route::post('/reservations/filtrer', [ReservationController::class, 'filtrer'])->name('reservation.filtrer');
Route::get('/historique', [ReservationController::class, 'touReservation'])->name('reservation.historique');
Route::get('/reservation/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservation.edit');
Route::put('/reservation/{reservation}', [ReservationController::class, 'update'])->name('reservation.update');
Route::get('/doctor/reservations', [ReservationController::class, 'index'])->name('reservation.index');
Route::post('/reservations/filtrer', [ReservationController::class, 'filtrer'])->name('reservation.filtrer');
Route::get('/historique', [ReservationController::class, 'touReservation'])->name('reservation.historique');
Route::get('/reservation/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservation.edit');
Route::put('/reservation/{reservation}', [ReservationController::class, 'update'])->name('reservation.update');
});
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthDoctor::class, 'showRegister'])->name('register.show');
    Route::post('/register', [AuthDoctor::class, 'register'])->name('register.post');

    Route::get('/login', [AuthDoctor::class, 'showLogin'])->name('login.show');
    Route::post('/login', [AuthDoctor::class, 'login'])->name('login.post');
});

