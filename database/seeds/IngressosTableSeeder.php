<?php

use Illuminate\Database\Seeder;

class IngressosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ingresso::class, 30)->create();
    }
}
