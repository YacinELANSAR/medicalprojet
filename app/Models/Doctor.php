<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Doctor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'phonenumber',
        'genre',
        'profileimage',
        'description',
        'age',
        'adresse',
        'speciality',
        'email',
        'departement_id',
        'ville_id',
       
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $guard='doctor';
    
    public function departement(){
        return $this->belongsTo(Departement::class);
    }
    public function ville(){
        return $this->belongsTo(Ville::class);
    }
    public function reservations(){
        return $this->belongsToMany(Client::class,'reservations','doctor_id','client_id')->withPivot(['dateTime','status']);
    }
    public function calendries(){
        return $this->hasMany(Calendrier::class,'doctor_id');
    }
}
