<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddApresentacaosForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apresentacaos', function (Blueprint $table) {
            $table->unsignedBigInteger('atracao_id')->nullable();
            $table->unsignedBigInteger('evento_unico_id')->nullable();
            $table->foreign('atracao_id')->references('id')->on('atracaos');
            $table->foreign('evento_unico_id')->references('id')->on('evento_unicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apresentacaos', function (Blueprint $table) {
            $table->dropColumn(['atracao_id','evento_unico_id']);
        });
    }
}
