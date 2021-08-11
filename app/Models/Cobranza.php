<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobranza extends Model
{
    use HasFactory;

    public function compraarticulos()
    {
        return $this->hasMany(CompraArticulo::class);
    }

    public function turno()
    {
        return $this->belongsTo(Turno::class);
    }

}
