<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \CsProjeto\Client::truncate();
        factory(\CsProjeto\Client::class, 10)->create();
    }
}
