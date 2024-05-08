<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $fillable = ['Marque', 'Modele', 'Type_carburant',  'numero_immatriculation', 'Picture'];

    public function client()
{
    return $this->belongsTo(Client::class);
}

    public function reparations()
    {
        return $this->hasMany(Reparation::class);
    }

}
