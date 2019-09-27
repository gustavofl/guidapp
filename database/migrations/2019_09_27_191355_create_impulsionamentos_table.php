<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpulsionamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impulsionamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data_inicial');
            $table->date('data_final');
            $table->float('preco_dia');
            $table->date('data_compra');
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
        Schema::dropIfExists('impulsionamentos');
    }
}
