<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DiaryContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('diary_contents')->insert([
                'diarycontent_weekday' => "T ".$i,
                'diarycontent_work' => "W ".$i,
                'diarycontent_content' => "C ".$i,
                'diarycontent_note' => "N ".$i,
                'diarycontent_teacher_comment' => "TC ".$i,
                'diarycontent_trainer_comment' => "TrC ".$i,
                'week_id' => $i,
                'status' => Str::random(8),
                'created_at'=> Carbon::today()
            ]);
        }
    }
}
