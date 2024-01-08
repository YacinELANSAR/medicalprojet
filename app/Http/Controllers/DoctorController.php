<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Calendrier;
use App\Http\Controllers\Controller;
use App\Models\Ville;
use App\Models\demande_client;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DoctorController extends Controller
{
    public function Profile()
{
    $doctorConnecte = Doctor::find(auth()->user()->id);
    $villeDoctorConnecte = $doctorConnecte->ville;
    $DepartementDoctorConnecte = $doctorConnecte->departement;

    return view('Doctors.DoctorArea.profile', compact('doctorConnecte', 'villeDoctorConnecte','DepartementDoctorConnecte'));
}
public function downloadPDFDoctor(Doctor $doctor)
{
    $doctorConnecte = Doctor::find(auth()->user()->id);
    $villeDoctorConnecte = $doctorConnecte->ville()->select('libelle')->first();
$departementDoctorConnecte = $doctorConnecte->departement()->select('libelle')->first();

$baseUrl = 'http://127.0.0.1:8000/';
$newPath = 'public/';
$profileImagePath = str_replace($baseUrl, $newPath, $doctorConnecte->profileimage);
$localImagePath = public_path('import/assets/img/testimonials/testimonials-4.jpg');

    $doctorData = [
        'matricule' => $doctorConnecte->matricule,
        'nom' => $doctorConnecte->nom,
        'profileimage' => $localImagePath,
        'prenom' => $doctorConnecte->prenom,
        'adresse' => $doctorConnecte->adresse,
        'genre' => $doctorConnecte->genre,
        'phonenumber' => $doctorConnecte->phonenumber,
        'description' => $doctorConnecte->description,
        'email' => $doctorConnecte->email,
        'departement' => $departementDoctorConnecte ? $departementDoctorConnecte->libelle : null,
        'ville' => $villeDoctorConnecte ? $villeDoctorConnecte->libelle : null,    ];
    $dompdf = new Dompdf();

    $html = view('Doctors.DoctorArea.cvDoctor', compact('doctorData'))->render();

    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    return $dompdf->stream('doctor_profile.pdf');
}
public function ShowFormUpdatePassword()
{
    return view('Doctors.DoctorArea.updatePassword');
}
public function UpdatePassword(Request $request)
{
    $request->validate([
       
        'newpassword' => 'required|min:8|max:20',
        'confirmnewpassword' => 'required|min:8|max:20',
    ]);
    $doctor=Doctor::find(auth()->user()->id);
    $oldpassword=$request->currentPassword;
    $newpassword = $request->newpassword;
    $confirmnewpassword = $request->confirmnewpassword;
    if (Hash::check($oldpassword, $doctor->password)) {
        if($newpassword===$confirmnewpassword  ){
            $doctor->update(['password'=>Hash::make($newpassword)]);
            return back()->with('success', 'Le mot de passe est modifié avec succès');
        }
        return back()->withErrors('Le nouveau mot de passe et la confirmation ne correspondent pas');
    }
    return back()->withErrors('Le mot de passe actuel est incorrect');
}

    public function Rendez_vous(){
        // $doctorConnecte = Doctor::find(auth()->user()->id);
        // $demandeDoctorConnecte = $doctorConnecte->demande_client;
        // dd($demandeDoctorConnecte);
        $demandes = demande_client::paginate(8);
        // dd($demandes);
        return view('Doctors.DoctorArea.afficher_Rendez_vous',compact('demandes'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('Doctors.DoctorArea.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
         $request->validate([
                'nom' => 'string|required|max:40|min:4|regex:/^[a-zA-Z]+$/',
                'prenom' => 'required|string|max:40|min:4|regex:/^[a-zA-Z]+$/',
                'email' => 'required|email',
                'phonenumber' => 'required',
                'description'=>'required|min:20|max:255',
                'genre'=>'required',
                'matricule'=>'required',
                'adresse'=>'required|min:10',                
                ]
            );
    
        $doctorData = [
            'matricule' => $request->matricule,
            'nom' => $request->firstname,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'genre' => $request->genre,
            'phonenumber' => $request->phonenumber,
            'description' => $request->description,
            'email' => $request->email
        ];
    
        if ($request->hasFile('profileimage')) {
            $allowedExtensions = ['jpeg', 'png', 'jpg', 'gif'];
            $extension = $request->profileimage->extension();
    
            if (in_array($extension, $allowedExtensions)) {
                $filename = $request->getSchemeAndHttpHost() . '/import/assets/img/doctors/profiles/' . time() . '.' . $extension;
                $request->profileimage->move(public_path('/import/assets/img/doctors/profiles/'), $filename);
                $doctorData['profileimage'] = $filename;
            } else {
                return back()->withErrors(['Seuls les fichiers JPEG, PNG, JPG et GIF sont autorisés. Veuillez télécharger un fichier valide.']);
            }
        }
    
        $doctorUpdate = $doctor->update($doctorData);
    
        if ($doctorUpdate) {
            return back()->with('success', 'Le profil est modifié avec succès');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
