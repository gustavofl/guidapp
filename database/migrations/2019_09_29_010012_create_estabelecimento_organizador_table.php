<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstabelecimentoOrganizadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estabelecimento_organizador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('estabelecimento_id');
            $table->unsignedBigInteger('organizador_id');
            $table->foreign('estabelecimento_id')->references('id')->on('estabelecimentos');
            $table->foreign('organizador_id')->references('id')->on('organizadors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estabelecimento_organizador');
    }
}
