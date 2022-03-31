<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annuncio extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function modello() {
        return $this->belongsTo(Modello::class);
    }

    public function comune() {
        return $this->belongsTo(Comune::class);
    }

    
    
    public function dettaglio() {
        return $this->hasOne(dettaglio::class);
    }

    
    public function immagini() {
        return $this->hasMany(Immagine::class);
    }
}
