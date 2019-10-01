<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtracaoTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atracao_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('atracao_id');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('atracao_id')->references('id')->on('atracaos');
            $table->foreign('tag_id')->references('id')->on('tags');
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
        Schema::dropIfExists('atracao_tag');
    }
}
