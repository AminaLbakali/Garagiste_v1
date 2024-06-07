<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mecanicien extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'specialization']; 

    public function reparations()
    {
        return $this->hasMany(Reparation::class);
    }
}
