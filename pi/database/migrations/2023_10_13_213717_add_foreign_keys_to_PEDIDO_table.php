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
        Schema::table('PEDIDO', function (Blueprint $table) {
            $table->foreign(['ENDERECO_ID'], 'FK_ENDERECO_PEDIDO')->references(['ENDERECO_ID'])->on('ENDERECO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['STATUS_ID'], 'FK_PEDIDO_STATUS_PEDIDO')->references(['STATUS_ID'])->on('PEDIDO_STATUS')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['USUARIO_ID'], 'FK_USUARIO_PEDIDO')->references(['USUARIO_ID'])->on('USUARIO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PEDIDO', function (Blueprint $table) {
            $table->dropForeign('FK_ENDERECO_PEDIDO');
            $table->dropForeign('FK_PEDIDO_STATUS_PEDIDO');
            $table->dropForeign('FK_USUARIO_PEDIDO');
        });
    }
};
