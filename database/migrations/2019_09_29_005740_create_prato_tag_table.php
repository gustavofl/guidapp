<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePratoTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prato_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('prato_id');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('prato_id')->references('id')->on('pratos');
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
        Schema::dropIfExists('prato_tag');
    }
}
