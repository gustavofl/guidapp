<?php

use Illuminate\Database\Seeder;

class Avaliacao_estabelecimentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Avaliacao_estabelecimento', 30)->create();
    }
}
