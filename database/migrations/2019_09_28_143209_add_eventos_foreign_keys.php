<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEventosForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eventos', function (Blueprint $table) {
            $table->unsignedBigInteger('estabelecimento_id');
            $table->unsignedBigInteger('organizador_id');
            $table->foreign('estabelecimento_id')->references('id')->on('estabelecimentos');
            $table->foreign('organizador_id')->references('id')->on('organizadors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eventos', function (Blueprint $table) {
            $table->dropColumn(['estabelecimento_id','organizador_id']);
        });
    }
}
