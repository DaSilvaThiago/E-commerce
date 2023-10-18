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
        Schema::create('CATEGORIA', function (Blueprint $table) {
            $table->integer('CATEGORIA_ID', true);
            $table->string('CATEGORIA_NOME', 500);
            $table->string('CATEGORIA_DESC', 8000);
            $table->boolean('CATEGORIA_ATIVO')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CATEGORIA');
    }
};
