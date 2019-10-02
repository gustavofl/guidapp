<?php

use Illuminate\Database\Seeder;

class EstabelecimentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Estabelecimento', 30)
            ->create();
    }
}
