<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Profession;
use App\Models\Category;
use App\Models\Portfolio;
//use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // ¿¿ deberiamos crear  esto por cada model ?? para rellener las tablas
        Profile::factory(20)->create();

        Project::factory(20)->create();

        Portfolio::factory(20)->create();

        Profession::factory(20)->create();

        Category::factory(20)->create();

       // User::factory(20)->create();
    }
}
