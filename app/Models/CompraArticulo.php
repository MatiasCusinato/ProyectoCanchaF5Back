<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraArticulo extends Model
{
    use HasFactory;

    //Relacion 1 a 1 
    public function articulo()
    {
        return $this->hasOne(Articulo::class);
    }

    //Relacion 1 a M INVERSA
    public function cobranza()
    {
        return $this->belongsTo(Cobranza::class);
    }
}
