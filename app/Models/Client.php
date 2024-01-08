<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'age',
        'adresse',
        'email',
        'password',
        'profileimage',
        'codeclient',
    ];
    protected $table = 'clients';
    public function reviews(){
        return $this->hasMany(Review::class,'client_id');
    }
    public function reservations(){
        return $this->belongsToMany(Doctor::class,'reservations','doctor_id','client_id')->withPivot(['dateTime','status']);
    }
    public function demande_client()
    {
        return $this->hasMany(demande_client::class);
    }
}
