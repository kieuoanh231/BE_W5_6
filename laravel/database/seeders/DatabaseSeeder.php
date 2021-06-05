<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        $this->call([
            CompaniesSeeder::class,
            TrainersSeeder::class,
            CategoriesSeeder::class,
            CategoriesHasCompaniesSeeder::class,
            UsersHasPermissionsSeeder::class,
            UsersSeeder::class,
            PermissionsSeeder::class,
            GroupsPermissionsSeeder::class,
            GroupsSeeder::class,
            WeekSeeder::class,
            UserTypeSeeder::class,
            SubjectSeeder::class,
            FacultySeeder::class,
            DiarySeeder::class,
            CourseSeeder::class,
            ClassSeeder::class,
            ClassHasUserSeeder::class,
            DiaryContentSeeder::class
        ]);
    }
}
