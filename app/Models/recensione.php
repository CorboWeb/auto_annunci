<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recensione extends Model
{
    use HasFactory;
    protected $table='recensioni';
    public $timestamps = false;


    public function user() {
        return $this->belongsTo(User::class);
    }
}
