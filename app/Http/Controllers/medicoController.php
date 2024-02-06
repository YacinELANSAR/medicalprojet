<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\calendries;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Calendrier; 
use App\Models\demande_client;
use App\Models\posts;
use Illuminate\Support\Facades\Hash;

class MedicoController extends Controller
{
    public function insert_user(Request $request){
        $phone_number = $request->input('phonenumber');
        // $agree = $request->input('agree');
        $nom = $request->input('firstname');
        $prenom = $request->input('lastname');
        $email = $request->input('email');
        $password = $request->input('password');
        $age = $request->input('age');
        $adresse = $request->input('adresse');
        $photo_profile = $request->file('profileimage');
        

        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZazertyuiopqsdfghjklmwxcvbn0123456789';
        $matricule = '';
        for ($i = 0; $i < 8; $i++) {
            $matricule .= $characters[rand(0, strlen($characters) - 1)];
        }

        $length = rand(5, 10); 
        $randstring = '';
        for ($i = 0; $i < $length; $i++) {
            $randstring.= $characters[rand(0, strlen($characters) - 1)]; 
        }
        
        $imageName = time().'-'.$nom.'-'.$randstring.'.'.$photo_profile->extension();
        $photo_profile->move(public_path('users_images'),$imageName);

        // $request->validate([
        //     'nom'=> 'required|string',
        //     'prenom'=> 'required|string',
        //     'telephone'=>'required|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/',
        //     'email'=>'required|email',
        //     'password'=>'required|min:8|confirmed',
        //     'age'=>'required|max:200|string',
        //     'adresse'=>'required',
        //     'profileimage'=>'mimes:jpg,jpeg,jfif,pjpeg,pjp,png,svg|max:5050'
        // ]);
       
        Client::create([
            'telephone'=>$phone_number,
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'age' => $age,
            'adresse' => $adresse,
            'password' => Hash::make($password),
            'profileimage'=>$imageName,
            'codeclient'=>$matricule,
            
        ]);

        return redirect()->back();
         
       

        // return redirect()->back()->with('success', 'User created successfully.');
    }

    public function afficher_ins($lang = 'fr'){
        App::setLocale($lang);
        return view('Signup');
    }
    public function valid_login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $data = ['email' => $email, 'password' => $password];
        
        if(auth()->guard('clients')->attempt($data)){
            return response()->json(['success' => 'You are successfully logged in']);
        }
        elseif(auth()->guard('clients')->check() ){
            return response()->json(['already_logged_in' => 'You are already logged in']);
        }
        else{
            return response()->json(['failed' => 'Login failed. Please check your credentials']);
        }
    }
    
    public function afficher_log($lang = 'fr'){
        App::setLocale($lang);
        return view('Signin');
    }
    public function afficher_searchacc($lang = 'fr'){
        return view('search_account');
    }
    public function add_photo_profile(Request $request){
        return view('add_photo_profile');
    }
   
public function afficher_patients(Request $request)
{
    $users = Client::paginate(10);
    return view('afficher_patients', compact('users'));
}


public function show_domand(Request $request, $jour = null)
{
    $posts = posts::with('clients')->orderBy('created_at', 'desc')->get();
        
    $currentTime = Carbon::now();

    // Calculate elapsed time for each post
    $elapsedTimes = [];
    foreach ($posts as $post) {
        $postCreatedAt = Carbon::parse($post->created_at);
        $elapsedTimes[] = $postCreatedAt->diffForHumans($currentTime);
    }

    // return view('homepage', compact());

    $jour = $jour ?? now()->format('Y-m-d');
    $jourselected = $request->input('jour');
   
    
    if( $doctor = Doctor::find(1)){
        $departement = $doctor->Departement;
        $Calendrier = $doctor->calendries;
        $doctorId = 1;
        $online = Doctor::pluck('last_seen');
    
        // Get unique future dates
        $currentDate = Carbon::now()->toDateString();
        $jours = $doctor->calendries
            ->pluck('jour')
            ->unique()
            ->filter(function ($date) use ($currentDate) {
                return $date >= $currentDate;
            })
            ->toArray();
    
        $datesj = Calendrier::where('doctor_id', $doctorId)
            ->where('jour', $jour)
            ->first();
        $datedepart_oj = $datesj ? $datesj->hdepart : null;
        $datefin_oj = $datesj ? $datesj->hfin : null;
    
        $dates = Calendrier::where('doctor_id', $doctorId)
            ->where('jour', $jour)
            ->first();
    
        $delaiConsultations = $dates ? $dates->delaiConsultation : null;
        $delaiConsultation = substr($delaiConsultations, 0, 2);
        $datedepart = $dates ? $dates->hdepart : null;
        $datefin = $dates ? $dates->hfin : null;
    
        $startDate = new \DateTime($datedepart);
        $endDate = new \DateTime($datefin);
    
        // Initialize an array to store the result
        $timeIntervals = [];
    
        // Loop to create the array of time intervals
      
     try{
        while ($startDate <= $endDate) {
            $time = $startDate->format('H:i');
            $timeIntervals[] = $time;
            $startDate->add(new \DateInterval('PT' . $delaiConsultation . 'M'));
        }
     }
     catch(\Exception $e){
        
        $datedepart = 'none';
        $datefin = 'none';
        $jours = 'none';
        $timeIntervals = 'none';
        $jourselected = 'none';
     }
        
       
      
    
        $jour = $jour ?? now()->format('Y-m-d');
        $jourselected = $request->input('jours', $jour); // Use the default value if 'jours' is not present in the request
       
        return view('show_doctor', compact('posts', 'currentTime', 'elapsedTimes','doctor', 'departement', 'Calendrier', 'datedepart', 'datefin', 'jours', 'timeIntervals', 'jourselected','online'));
    } 
   
}




public function demande_reservation(Request $request){
    $jour = $request->input('jours');
    $time = $request->input('time');
    $j = substr($jour,13);

    // $request->validate([
    //     'jour'=>'required',
    //     'heure'=>'required',
    // ]);

    demande_client::create([
        'jour'=> $j,
        'heure'=>$time,
    ]);
    return redirect()->back()->with('msg','la demande a été validée');
        
    
}






public function searchPatients(Request $request)
{
    $query = $request->input('query');
    $users = Client::where('nom', 'like', "$query%")
                   ->orWhere('prenom', 'like', "$query%")
                   ->orWhere('telephone', 'like', "$query%")
                   ->orWhere('age', 'like', "$query%")
                //    ->orWhere('sexe', 'like', "$query%")
                   ->get();

    $data = [];

    foreach ($users as $user) {
        $data[] = $user->nom ;
    }

    return response()->json($data);
}
// public function searchPatients(Request $request){
//     if($request->ajax()){
 
//         $data = Client::where('nom', 'like', "$request->search%")
//     ->orWhere('prenom', 'like', "$request->search%")
//     ->orWhere('telephone', 'like', "$request->search%")
//     ->orWhere('age', 'like', "$request->search%")
//     // ->orWhere('sexe', 'like', "$request->search%")
//     ->get();

//         $output='';
//         if(count($data)>0){
//             $output ='
//                 <table class="table">
//                 <thead>
//                 <tr>
//                     <th scope="col">Nom</th>
//                     <th scope="col">Prenom</th>
//                     <th scope="col">Tel</th>
//                     <th scope="col">Age</th>
//                     <th scope="col">Action</th>
//                 </tr>
//                 </thead>
//                 <tbody>';
//                     foreach($data as $row){
//                         $output .='
//                         <tr>
//                         <th scope="row">'.$row->nom.'</th>
//                         <td>'.$row->prenom.'</td>
//                         <td>'.$row->telephone.'</td>
//                         <td>'.$row->telephone.'</td>
//                         <td>'.$row->age.'</td>
//                         </tr>
//                         ';
//                     }
//             $output .= '
//                 </tbody>
//                 </table>';
//         }
//         else{
//             $output .='No results';
//         }
//         return dd($output);
//     }
// }

}

