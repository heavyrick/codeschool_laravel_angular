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
        \CsProjeto\Entities\Client::truncate();
        factory(\CsProjeto\Entities\Client::class, 10)->create();
    }
}
