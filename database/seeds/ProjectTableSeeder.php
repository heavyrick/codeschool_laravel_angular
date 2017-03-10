<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \CsProjeto\Entities\Project::truncate();
        factory(\CsProjeto\Entities\Project::class, 10)->create();
    }
}
