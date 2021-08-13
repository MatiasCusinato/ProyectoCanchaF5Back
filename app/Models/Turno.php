<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    //Relacion inversa 1 a 1
    public function cobranza()
    {
        return $this->belongsTo('App\Models\Cobranza');
    }

    //Relacion 1 a M INVERSA
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario');
    }


}
