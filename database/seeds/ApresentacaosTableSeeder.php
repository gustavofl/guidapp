<?php

use Illuminate\Database\Seeder;

class ApresentacaosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Apresentacao', 30)->create();
    }
}
