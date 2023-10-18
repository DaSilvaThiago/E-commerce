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
        Schema::table('CARRINHO_ITEM', function (Blueprint $table) {
            $table->foreign(['PRODUTO_ID'], 'FK_PRODUTO_CARRINHO_ITEM')->references(['PRODUTO_ID'])->on('PRODUTO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['USUARIO_ID'], 'FK_USUARIO_CARRINHO_ITEM')->references(['USUARIO_ID'])->on('USUARIO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('CARRINHO_ITEM', function (Blueprint $table) {
            $table->dropForeign('FK_PRODUTO_CARRINHO_ITEM');
            $table->dropForeign('FK_USUARIO_CARRINHO_ITEM');
        });
    }
};
