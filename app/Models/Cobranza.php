<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobranza extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'precio',
        'estado'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //Relacion 1 a M 
    public function compraarticulos()
    {
        return $this->hasMany('App\Models\CompraArticulo');
    }

    //Relacion 1 a 1
    public function turno()
    {
        return $this->hasOne('App\Models\Turno');
    }
    

}
