<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = ['additionalCharges', 'totalAmount', 'repairID'];
    public function reparation()
    {
        return $this->belongsTo(Reparation::class);
    }

    public function piecesRechange()
    {
        return $this->belongsTo(PiecesRechange::class);
    }
}
