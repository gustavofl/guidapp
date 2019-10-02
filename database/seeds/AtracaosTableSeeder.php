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
        factory('App\Atracao', 30)
            ->create();

            /* ->each(function ($atracaos) {
                $atracaos->contato()->createMany(
                    factory(App\Contato::class, 3)->make()->toArray()
                );
                $atracaos->apresentacao()->createMany(
                    factory(App\Apresentacao::class, 3)->make()->toArray()
                );
                $atracaos->comentario()->createMany(
                    factory(App\Comentario::class, rand(0,20))->make()->toArray()
                );
                $atracaos->imagem()->createMany(
                    factory(App\Imagem::class, rand(0,5))->make()->toArray()
                );
            }) */
    }
}
