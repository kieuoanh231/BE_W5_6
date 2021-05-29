<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $queryInsert='insert into trainers values (null,?,?,?,?);';
        for ($i=0; $i < 1; $i++) { 
            DB::insert($queryInsert,["oanh","1","","12345"]);
            // DB::table('trainers')->insert([
            //     'trainer_name' => "a",
            //     'company_id' => "1",
            //     'trainer_email' => "",
            //     'trainer_phone' => "012345679",
            // ]);
        }
    }
}
