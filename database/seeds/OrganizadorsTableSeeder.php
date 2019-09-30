<?php

use Illuminate\Database\Seeder;

class OrganizadorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Organizador', 10)->create();
    }
}
