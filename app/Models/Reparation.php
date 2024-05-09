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
    public function vehicule()
{
    return $this->belongsTo(Vehicule::class);
}

public function mecanicien()
{
    return $this->belongsTo(Mecanicien::class);
}

}
