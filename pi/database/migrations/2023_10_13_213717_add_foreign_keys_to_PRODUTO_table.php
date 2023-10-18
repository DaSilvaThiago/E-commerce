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
        Schema::table('PRODUTO', function (Blueprint $table) {
            $table->foreign(['CATEGORIA_ID'], 'FK_CATEGORIA_PRODUTO')->references(['CATEGORIA_ID'])->on('CATEGORIA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PRODUTO', function (Blueprint $table) {
            $table->dropForeign('FK_CATEGORIA_PRODUTO');
        });
    }
};
