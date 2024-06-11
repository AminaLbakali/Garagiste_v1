<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'adresse', 'numero_telephone', 'adresse_email','userID'];
    public function vehicules()
    {
    return $this->hasMany(Vehicule::class);
        }
    public function reparations()
    {
        return $this->hasMany(Reparation::class);
    }

}
