<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('codigo_est');
            $table->boolean('estado_est');
            $table->time('hora_ingreso');
            $table->time('hora_salida')->nullable();
            $table->string('rut');
            $table->string('patente');
            $table->timestamps();
            $table->foreign('codigo_est')->references('codigo')->on('estacionamientos');
            $table->foreign('rut')->references('rut')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
};
