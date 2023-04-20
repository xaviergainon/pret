<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pret extends Model
{
    use HasFactory;

    protected $fillable = [
        'typepret',
        'montant' ,
        'dureeaa' ,
        'dureemm' ,
        'taux'    ,
    ];

    public function typePret () {
        return $this->belongsTo(TypePret::class);
    }
}
