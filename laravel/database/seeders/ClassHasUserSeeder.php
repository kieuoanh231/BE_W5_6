<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ClassHasUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('classes_has_users')->insert([
                'class_id' => $i,
                'status' => Str::random(8),
                'created_at'=> Carbon::now()
            ]);
        }
    }
}
