<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $queryInsert='insert into user_types values (null,?,?,?,?,?);';
        for ($i=0; $i < 10; $i++) { 
            DB::insert($queryInsert,["student","status",null,null,null]);
        }
    }
}
