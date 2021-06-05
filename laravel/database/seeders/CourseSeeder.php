<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('courses')->insert([
                'course_name' => "TDC",
                'course_semester' => "1",
                'course_year' => "1",
                'subject_id' => "1",
                'status' => "y",
            ]);
        }
    }
}
