<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_articulos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_articulo")->nullable();
            $table->unsignedBigInteger("id_cobranza")->nullable();
            $table->integer("cantidad");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra_articulos');
    }
}
