<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_factura', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('vehiculo_id');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculo');

            $table->unsignedBigInteger('factura_id');
            $table->foreign('factura_id')->references('id')->on('factura');

            $table->enum('estado', ['entregado', 'devuelto'])->nullable();  // Estados posibles: entregado confirmado devuelto
           
            $table->string('descripcion');
            $table->integer('cantidad_dias');
            $table->float('iva');  // el del usuario (21.0)
            $table->float('precio_dia');  // precio unitario
            $table->float('descuento');  // si lleva descuento o algún cupón
            $table->float('subtotal');  // precio * descuento * cantidad_dias
            $table->float('total_con_iva');  // subtotal * iva
            $table->float('tasas');  // total_con_iva - subotal
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
        Schema::dropIfExists('linea_factura');
    }
}
