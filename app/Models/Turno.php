<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    //Relacion inversa 1 a 1
    protected $fillable = [
        'cliente_id',
        'cobranza_id',
        'nombre_turno',
        'tipo_turno',
        'fecha_Desde',
        'fecha_Hasta'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //Relacion 1 a M INVERSA
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }

    //Relacion 1 a 1 INVERSA
    public function cancha() 
    {
        return $this->belongsTo('App\Models\Cancha');
    }


}
