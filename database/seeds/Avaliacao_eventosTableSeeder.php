<?php

use Illuminate\Database\Seeder;

class Avaliacao_eventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Avaliacao_evento', 30)->create();
    }
}
