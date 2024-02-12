<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Reservation;
use App\Models\Client;
use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    
    $doctor = Doctor::find(auth()->user()->id);

    $id=auth()->user()->id;
    if ($doctor) {     
        $reservations = Reservation::join('clients', 'reservations.client_id', '=', 'clients.id')
        ->where('reservations.doctor_id','=' ,$id)
            ->whereIn('reservations.status', ['En cours', 'programmé'])
            ->select('clients.*', 'reservations.*')
            ->get();

        
        return view('Doctors.DoctorArea.reservation', compact('reservations','id'));
    } else {
        // Gérer le cas où le médecin n'est pas trouvé
        return redirect()->back()->with('error', 'Médecin introuvable.');
    }
}


    /**
     * Display a listing of the resource filtered by date.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filtrer(Request $request)
    {
        $date = $request->input('date');

        $reservations = Reservation::join('clients', 'reservations.client_id', '=', 'clients.id')
            ->where('reservations.date', '=', $date)
            ->whereIn('reservations.status', ['En cours', 'Programmé'])
            ->select('clients.*', 'reservations.*')
            ->get();

        if ($reservations->isEmpty()) {
            return redirect()->route('reservation.index')->with('message', 'Aucun rendez-vous trouvé pour la date sélectionnée.');
        }

        return view('Doctors.DoctorArea.reservation', compact('reservations'));
    }

    public function touReservation()
    {
        
        $doctor = Doctor::find(auth()->user()->id);
        $id=auth()->user()->id;
        $reservations = Reservation::join('clients', 'reservations.client_id', '=', 'clients.id')
        ->where('reservations.doctor_id','=' ,$id)
            ->where('reservations.status', '=', 'Terminé')
            ->select('clients.*', 'reservations.*')
            ->get();

        return view('Doctors.DoctorArea.historique', compact('reservations'));
    }

    public function edit(Reservation $reservation)
    {
        $id=$reservation->client_id;
        $client=Client::find($id);
        return view('Doctors.DoctorArea.Modefreservation', compact('reservation','client'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        // Validation if needed
        $request->validate([
            'status' => 'required|string|max:255',
            // Add more fields as needed
        ]);

        // Update the appointment
        $reservation->update([
            'status' => $request->input('status'),
            // Add more fields as needed
        ]);

        // Redirect back with a success message
        return redirect()->route('reservation.index')->with('message', 'Rendez-vous mis à jour avec succès!');
    }
}
