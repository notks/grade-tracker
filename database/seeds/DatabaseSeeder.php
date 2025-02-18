<?php

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
        $this->call(CoursesSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(GradesSeeder::class);
        $this->call(ClassesSeeder::class);

    }
}
