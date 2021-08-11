<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Articulo;
use App\Models\Cobranza;
use App\Models\CompraArticulo;
use App\Models\Turno;
use App\Models\Usuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Usuario::factory(10)->create();
        \App\Models\Articulo::factory(20)->create();
        \App\Models\Cobranza::factory(30)->create();
        \App\Models\CompraArticulo::factory(10)->create();
        \App\Models\Turno::factory(20)->create();
    }
}
