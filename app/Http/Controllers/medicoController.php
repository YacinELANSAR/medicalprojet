<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;


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

        $request->validate([
            'nom'=> 'required|unique:Client',
            'prenom'=> 'required|unique:Client',
            'telephone'=>'required|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/',
            'email'=>'required|email',
            'password'=>'required|min:8|confirmed',
            'age'=>'required|max:200|string',
            'adresse'=>'required',
        ]);
       
        Client::create([
            'telephone'=>$phone_number,
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'age' => $age,
            'adresse' => $adresse,
            'password' => bcrypt($password),
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
        $data = ['email'=>$email,'password'=>$password];
        if(Auth::attempt($data)){
            return redirect()->route('Signup')->with('msg','you are successfully logged in');
            // return dd(Client::all());
        }
        else{
            // return redirect()->back()->with('msg','something wrong');
            return dd(Client::all());
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
    public function store_img(Request $request){
        $nom = $request->name;
        $photo_profile = $request->file('photo_profile');

        $request->validate([
            'photo_profile'=>'mimes:jpg,jpeg,jfif,pjpeg,pjp,png,svg|max:5050'
        ]);
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$@-';
        $length = rand(5, 10); 
        $randstring = '';
        for ($i = 0; $i < $length; $i++) {
            $randstring.= $characters[rand(0, strlen($characters) - 1)]; 
        }
        
        $imageName = time().'-'.$nom.'-'.$randstring.'.'.$photo_profile->extension();
        // dd($imageName);
        Client::create([
            'photo_profile'=>$imageName,
        ]);
        $test = $photo_profile->move(public_path('users_images'),$imageName);
        return dd($test);
    }
}
