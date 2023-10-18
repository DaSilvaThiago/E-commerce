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
        Schema::table('PEDIDO_ITEM', function (Blueprint $table) {
            $table->foreign(['PEDIDO_ID'], 'FK_PEDIDO_PEDIDO_ITEM')->references(['PEDIDO_ID'])->on('PEDIDO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['PRODUTO_ID'], 'FK_PRODUTO_PEDIDO_ITEM')->references(['PRODUTO_ID'])->on('PRODUTO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PEDIDO_ITEM', function (Blueprint $table) {
            $table->dropForeign('FK_PEDIDO_PEDIDO_ITEM');
            $table->dropForeign('FK_PRODUTO_PEDIDO_ITEM');
        });
    }
};
