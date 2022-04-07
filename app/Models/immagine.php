<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class immagine extends Model
{
    use HasFactory;
    protected $table='immagini';

    public function annuncio() {
        return $this->belongsTo(Annuncio::class);
    }
}
