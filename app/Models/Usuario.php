<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'edad',
        'password'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //Relacion 1 A M 
    public function turnos()
    {
        return $this->hasMany('App\Models\Turno');
    }

    
}
