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
        Schema::create('PRODUTO', function (Blueprint $table) {
            $table->integer('PRODUTO_ID', true);
            $table->string('PRODUTO_NOME', 500);
            $table->string('PRODUTO_DESC', 8000);
            $table->decimal('PRODUTO_PRECO', 5);
            $table->decimal('PRODUTO_DESCONTO', 5);
            $table->integer('CATEGORIA_ID')->index('FK_CATEGORIA_PRODUTO');
            $table->boolean('PRODUTO_ATIVO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PRODUTO');
    }
};
