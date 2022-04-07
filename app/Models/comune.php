<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comune extends Model
{
    use HasFactory;
    protected $table='comuni';

    public function annunci() {
        return $this->hasMany(Annuncio::class);
    }
}
