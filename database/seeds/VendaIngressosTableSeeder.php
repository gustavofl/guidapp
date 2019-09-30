<?php

use Illuminate\Database\Seeder;

class VendaIngressosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\VendaIngresso::class, 30)->create();
    }
}
