<?php

use Illuminate\Database\Seeder;

class PratosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Prato::class, 30)->create();
    }
}
