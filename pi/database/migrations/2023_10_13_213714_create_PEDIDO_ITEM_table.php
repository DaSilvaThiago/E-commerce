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
        Schema::create('PEDIDO_ITEM', function (Blueprint $table) {
            $table->integer('PRODUTO_ID')->index('FK_PRODUTO_PEDIDO_ITEM');
            $table->integer('PEDIDO_ID')->index('FK_PEDIDO_PEDIDO_ITEM');
            $table->integer('ITEM_QTD');
            $table->decimal('ITEM_PRECO', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PEDIDO_ITEM');
    }
};
