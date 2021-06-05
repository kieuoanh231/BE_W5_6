<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('classes')->insert([
                'class_name' => "TT9",
                'teacher_id' => "4",
                'course_id' => "1",
                'faculty_id' => "1",
                'status' => "y",
            ]);
        }
    }
}
