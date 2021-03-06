<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    public function entreprise(){
        return $this->belongsTo(Entreprise::class);
    }

    public function domaine(){
        return $this->belongsTo(Domaine::class);
    }


    protected $fillable = [
        'titre',
        'description_courte',
        'description_longue',
        'ville',
        'code_postal',
        'domaine_id',
        'entreprise_id',
        

    ];

}
