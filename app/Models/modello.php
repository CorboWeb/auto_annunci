<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modello extends Model
{
    use HasFactory;


    public function marca() {
        return $this->belongsTo(Marca::class);
    }


    public function annunci() {
        return $this->hasMany(Annuncio::class);
    }


}
