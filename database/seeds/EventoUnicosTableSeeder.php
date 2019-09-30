<?php

use Illuminate\Database\Seeder;

class EventoUnicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\EventoUnico', 30)
            ->create();

            /*->each(function ($evento) {
                $evento->eventoUnico()->save(factory(App\EventoUnico::class)->make());
            })*/
    }
}
