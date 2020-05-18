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
            $table->foreign('user_id')->references('id')->on('users');
            $table->dateTime('fecha', 0);
            $table->enum('estado', ['cancelado', 'confirmado', 'pagado'])->nullable();  // Estados posibles: Nulo, Cancelado, Confirmado, Pagado
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
        Schema::dropIfExists('pedido');
    }
}
