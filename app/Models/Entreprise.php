<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Entreprise extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function annonces(){
        return $this->hasMany(Annonce::class);
    }

    public function abonnement(){
        return $this->hasOne(Abonnement::class);
    }


    protected $fillable = [
        'user_id',
        'siret',
        'nom',
        'image',
        'description',
        

    ];

    protected $with = ['annonces'];
}
