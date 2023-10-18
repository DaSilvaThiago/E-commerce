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
        Schema::create('USUARIO', function (Blueprint $table) {
            $table->integer('USUARIO_ID', true);
            $table->string('USUARIO_NOME', 500);
            $table->string('USUARIO_EMAIL', 500);
            $table->string('USUARIO_SENHA', 500);
            $table->string('USUARIO_CPF', 11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('USUARIO');
    }
};
