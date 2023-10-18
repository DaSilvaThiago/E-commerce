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
        Schema::create('PRODUTO_IMAGEM', function (Blueprint $table) {
            $table->integer('IMAGEM_ID', true);
            $table->integer('IMAGEM_ORDEM');
            $table->integer('PRODUTO_ID')->index('FK_PRODUTO_PRODUTO_IMAGEM');
            $table->string('IMAGEM_URL', 8000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PRODUTO_IMAGEM');
    }
};
