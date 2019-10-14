<?php

use Illuminate\Database\Seeder;

class EstabecimentoUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\EstabelecimentoUser', 30)->create();
    }
}
