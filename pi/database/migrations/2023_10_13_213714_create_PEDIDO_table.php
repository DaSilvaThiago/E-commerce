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
        Schema::create('PEDIDO', function (Blueprint $table) {
            $table->integer('PEDIDO_ID', true);
            $table->integer('USUARIO_ID')->index('FK_USUARIO_PEDIDO');
            $table->integer('ENDERECO_ID')->index('FK_ENDERECO_PEDIDO');
            $table->integer('STATUS_ID')->index('FK_PEDIDO_STATUS_PEDIDO');
            $table->date('PEDIDO_DATA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PEDIDO');
    }
};
