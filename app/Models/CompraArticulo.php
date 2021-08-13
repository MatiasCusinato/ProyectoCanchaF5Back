<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraArticulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'cobranza_id',
        'articulo_id',
        'cantidad'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //relacion INVERSA 1 A 1
    public function articulo()
    {
        return $this->belongsTo("App\Models\Articulo");
    }

    //Relacion 1 a M INVERSA
    public function cobranza()
    {
        return $this->belongsTo('App\Models\Cobranza');
    }
}
