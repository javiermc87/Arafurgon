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
            $table->bigIncrements('id');
            $table->enum('tipo', ['carga', 'pasajeros', 'frigorifica']);  // Estados posibles: Frigorifica, carga, pasajero
            $table->string('matricula');
            $table->float('precio_dia');
            $table->float('kilometraje');
            $table->float('valoracion');

            $table->string('descripcion')->nullable();
            $table->string('modelo')->nullable();
           

            $table->float('volumen')->nullable($value = true);
            $table->float('kg')->nullable($value = true);
            $table->integer('num_pasajeros')->nullable($value = true);

            $table->boolean('disponible')->default(0);


        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculo_');
    }
}
