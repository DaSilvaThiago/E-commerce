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
        Schema::create('PRODUTO_ESTOQUE', function (Blueprint $table) {
            $table->integer('PRODUTO_ID')->index('FK_PRODUTO_PRODUTO_ESTOQUE');
            $table->integer('PRODUTO_QTD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PRODUTO_ESTOQUE');
    }
};
