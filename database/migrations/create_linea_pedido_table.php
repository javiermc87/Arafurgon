<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_pedido', function (Blueprint $table) {
            $table->id();
            $table->foreign('pedido_id')->references('id')->on('pedido');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculo');
            $table->enum('estado', ['entregado', 'confirmado', 'devuelto'])->nullable();  // Estados posibles: entregado confirmado devuelto
           
            $table->string('descripcion');
            $table->integer('cantidad_dias');
            $table->float('precio');
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
        Schema::dropIfExists('linea_pedido');
    }
}
