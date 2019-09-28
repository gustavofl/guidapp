<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPromocaosForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('promocaos', function (Blueprint $table) {
            $table->unsignedBigInteger('estabelecimento_id');
            $table->foreign('estabelecimento_id')->references('id')->on('estabelecimentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('promocaos', function (Blueprint $table) {
            $table->dropColumn('estabelecimento_id');
        });
    }
}
