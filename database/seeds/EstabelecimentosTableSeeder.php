<?php

use Illuminate\Database\Seeder;

class EstabelecimentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Estabelecimento', 10)
            ->create()
            ->each(function ($estabelecimentos) {
                $estabelecimentos->prato()->createMany(
                    factory(App\Prato::class, rand(0,15))->make()->toArray()
                );
            });
            
    }
}
