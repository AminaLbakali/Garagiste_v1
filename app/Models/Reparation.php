<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparation extends Model
{
    use HasFactory;
    protected $fillable=[
        'description',
        'status',
        'startDate',
        'endDate',
        'mechanicNotes',
        'clientNotes',
        'mechanicID',
        'vehicleID'
    ];
<<<<<<< HEAD

=======
>>>>>>> eeedc205a40a5ebed69ce52162a1d28c0885d139
    public function vehicule()
{
    return $this->belongsTo(Vehicule::class,"vehicleID");
}

public function mecanicien()
{
    return $this->belongsTo(Mecanicien::class,"mechanicID");
}

}
