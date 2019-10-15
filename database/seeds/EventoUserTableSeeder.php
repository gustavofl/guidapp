<?php

use Illuminate\Database\Seeder;

class EventoUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\EventoUser', 30)->create();
    }
}
