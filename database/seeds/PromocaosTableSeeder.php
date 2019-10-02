<?php

use Illuminate\Database\Seeder;

class PromocaosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Promocao::class, 30)->create();
    }
}
