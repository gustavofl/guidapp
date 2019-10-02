<?php

use Illuminate\Database\Seeder;

class FestivalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Festival', 30)
            ->create();

            /*->each(function ($evento) {
                $evento->festival()->save(
                    factory(App\Festival::class)->make()
                );
            })
            ->each(function ($evento) {
                $evento->eventoUnico()->createMany(
                    factory(App\EventoUnico::class, 5)->make()->toArray()
                );
            })*/
    }
}
