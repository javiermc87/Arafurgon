<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->id();
            $table->foreign('transaction_id')->references('id')->on('transaccion');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('linea_pedido_id')->references('id')->on('linea_pedido');
            $table->dateTime('fecha', 0);
            $table->enum('estado', ['cancelado', 'confirmado', 'pagado'])->nullable();  // Estados posibles: Nulo, Cancelado, Confirmado, Pagado
            $table->timestamps('added_on', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }
}
