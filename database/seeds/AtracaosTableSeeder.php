<?php

use Illuminate\Database\Seeder;

class AtracaosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Atracao', 10)
            ->create()
            ->each(function ($atracaos) {
                $atracaos->contato()->createMany(
                    factory(App\Contato::class, 3)->make()->toArray()
                );
            });
    }
}
