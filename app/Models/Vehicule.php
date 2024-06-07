<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'vehicules';
    protected $fillable = ['Marque', 'Modele', 'Type_carburant',  'numero_immatriculation', 'Picture', 'client_id'];
=======
    protected $fillable = ['marke', 'model', 'fuelType',  'registration', 'clientID'];
>>>>>>> eeedc205a40a5ebed69ce52162a1d28c0885d139

    public function client()
{
    return $this->belongsTo(Client::class,"client_id");
}

    public function reparations()
    {
        return $this->hasMany(Reparation::class,"vehicleID");
    }

}
