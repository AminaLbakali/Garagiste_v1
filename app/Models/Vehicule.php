<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $table = 'vehicules';
    protected $fillable = ['Marque', 'Modele', 'Type_carburant',  'numero_immatriculation', 'Picture', 'client_id'];

    public function client()
{
    return $this->belongsTo(Client::class,"client_id");
}

    public function reparations()
    {
        return $this->hasMany(Reparation::class,"vehicleID");
    }

}
