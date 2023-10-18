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
        Schema::create('CARRINHO_ITEM', function (Blueprint $table) {
            $table->integer('USUARIO_ID')->index('FK_USUARIO_CARRINHO_ITEM');
            $table->integer('PRODUTO_ID')->index('FK_PRODUTO_CARRINHO_ITEM');
            $table->integer('ITEM_QTD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CARRINHO_ITEM');
    }
};
