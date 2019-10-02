<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEstabelecimentosForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estabelecimentos', function (Blueprint $table) {
            $table->unsignedBigInteger('organizador_id');
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
        Schema::table('estabelecimentos', function (Blueprint $table) {
            $table->dropColumn('organizador_id');
        });
    }
}
