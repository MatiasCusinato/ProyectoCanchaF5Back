<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger("usuario_id")->nullable();
            $table->foreign('usuario_id')
                    ->references('id')->on('usuarios')
                    ->onDelete('set null');

            $table->unsignedBigInteger("cobranza_id")->nullable();
            $table->foreign('cobranza_id')
                    ->references('id')->on('cobranzas')
                    ->onDelete('set null');

            $table->string("nombre_turno");
            $table->enum('tipo_turno', ['Escuelaf5','Entrenamiento','Futbol5','Cumpleaños']);
            $table->dateTime("fecha_Desde");
            $table->dateTime("fecha_Hasta");
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
        Schema::dropIfExists('turnos');
    }
}
