<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['carga', 'pasajeros', 'frigorifica'])->nullable();  // Estados posibles: Frigorifica, carga, pasajero
            $table->string('matricula');
            $table->float('precio_dia');
            $table->float('kilometraje');
            $table->float('valoracion');
            $table->boolean('disponible')->default('0');

            $table->float('volumen');
            $table->float('kg');
            $table->integer('num_pasajeros');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculo');
    }
}
