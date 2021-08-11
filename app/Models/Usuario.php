<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    //Relacion 1 A M 
    public function turnos()
    {
        return $this->hasMany(Turno::class);
    }

    
}
