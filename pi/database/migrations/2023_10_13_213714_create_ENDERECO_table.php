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
        Schema::create('ENDERECO', function (Blueprint $table) {
            $table->integer('ENDERECO_ID', true);
            $table->integer('USUARIO_ID')->index('FK_USUARIO_ENDERECO');
            $table->string('ENDERECO_NOME', 500);
            $table->string('ENDERECO_LOGRADOURO', 500);
            $table->string('ENDERECO_NUMERO', 500);
            $table->string('ENDERECO_COMPLEMENTO', 500)->nullable();
            $table->string('ENDERECO_CEP', 8);
            $table->string('ENDERECO_CIDADE', 500);
            $table->string('ENDERECO_ESTADO', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ENDERECO');
    }
};
