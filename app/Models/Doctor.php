<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table="doctors";
    protected $fillable=[
        'id', 'matricule','nom','prenom','adresse','genre','profileimage','phonenumber','description','email','password','ville_id','departement_id'
    ];
     use HasFactory;
   
}
