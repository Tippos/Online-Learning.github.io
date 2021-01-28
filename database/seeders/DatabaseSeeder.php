<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            SubjectsSeeder::class,
            ClassesSeeder::class,
            CourseRqsSeeder::class
        ]);
        \App\Models\Users::factory(55)->create();
    }
}
