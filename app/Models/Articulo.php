<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    
    //relacion INVERSA 1A1
    public function compraarticulo()
    {
        return $this->belongsTo(CompraArticulo::class);
    }
}
