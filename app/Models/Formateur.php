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
        return $this->belongsToMany(Message::class);
    }

    public function domaines(){
        return $this->hasMany(Domaine::class);
    }
}
