<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'precio',
        'stock_minimo',
        'stock_maximo'
    ];
    
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //Relacion 1 a 1 
    public function compraarticulo()
    {
        return $this->hasOne('App\Models\CompraArticulo');
    }
  
}
