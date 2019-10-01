<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tag::class, 30)
            ->create()
            ->each(function ($tag){
                $estabelecimento = factory(\App\Estabelecimento::class)->create();
                $tag->estabelecimento()->attach($estabelecimento->id);
                $evento = factory(\App\Evento::class)->create();
                $tag->evento()->attach($evento->id);
                $prato = factory(\App\Prato::class)->create();
                $tag->prato()->attach($prato->id);
            });
    }
}
