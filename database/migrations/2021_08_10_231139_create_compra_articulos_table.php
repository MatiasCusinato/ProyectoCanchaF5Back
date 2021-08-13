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
            
            $table->unsignedBigInteger("cobranza_id")->nullable();
            $table->foreign('cobranza_id')
                    ->references('id')->on('cobranzas')
                    ->onDelete('set null');

            $table->unsignedBigInteger("articulo_id")->nullable();
            $table->foreign('articulo_id')
                    ->references('id')->on('articulos')
                    ->onDelete('set null');

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
