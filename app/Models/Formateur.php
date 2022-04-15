<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function domaines(){
        return $this->belongsToMany(Domaine::class, 'domaine_formateurs');
    }

    protected $fillable = [
        'user_id',
        'siret',
        'age',
        'sexe',
        'kms',
        'diplomes',
        'experiences',
        'annees_experience',
        'image',
        'disponible',
        'date_debut_dispo',
        'date_fin_dispo',

    ];
}


