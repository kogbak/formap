<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    use HasFactory;

    public function annonces(){
        return $this->belongsToMany(Annonce::class);
    }

    public function formateurs(){
        return $this->belongsToMany(User::class, 'domaine_formateurs'); 
    }
}
