<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = ['nom', 'prenom', 'adresse', 'numero_telephone', 'adresse_email','userID'];
=======
    protected $fillable = ['firstName', 'lastName', 'address', 'phoneNumber', 'userID'];
>>>>>>> eeedc205a40a5ebed69ce52162a1d28c0885d139
    public function vehicules()
    {
    return $this->hasMany(Vehicule::class);
        }
    public function reparations()
    {
        return $this->hasMany(Reparation::class);
    }

}
