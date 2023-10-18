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
        Schema::table('ENDERECO', function (Blueprint $table) {
            $table->foreign(['USUARIO_ID'], 'FK_USUARIO_ENDERECO')->references(['USUARIO_ID'])->on('USUARIO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ENDERECO', function (Blueprint $table) {
            $table->dropForeign('FK_USUARIO_ENDERECO');
        });
    }
};
