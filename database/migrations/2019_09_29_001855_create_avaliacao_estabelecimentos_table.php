<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacaoEstabelecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacao_estabelecimentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('estabelecimento_id');
            $table->unsignedBigInteger('user_id');
            $table->float('avaliacao');
            $table->timestamps();
            $table->foreign('estabelecimento_id')->references('id')->on('estabelecimentos');
            $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacao_estabelecimentos');
    }
}
