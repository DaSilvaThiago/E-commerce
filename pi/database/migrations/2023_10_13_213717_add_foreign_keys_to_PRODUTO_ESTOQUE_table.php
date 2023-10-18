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
        Schema::table('PRODUTO_ESTOQUE', function (Blueprint $table) {
            $table->foreign(['PRODUTO_ID'], 'FK_PRODUTO_PRODUTO_ESTOQUE')->references(['PRODUTO_ID'])->on('PRODUTO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PRODUTO_ESTOQUE', function (Blueprint $table) {
            $table->dropForeign('FK_PRODUTO_PRODUTO_ESTOQUE');
        });
    }
};
