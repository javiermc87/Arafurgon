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
            $table->id();
            $table->foreign('factura_id')->references('id')->on('factura');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculo');
            $table->string('descripcion');
            $table->integer('cantidad_dias');
            $table->float('precio_dia');
            $table->float('descuento');
            $table->float('subtotal');
            $table->float('tasas');
            $table->float('iva');
            $table->float('total_con_iva');
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
