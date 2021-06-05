<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $queryInsert='insert into diaries values (null,?,?,?,?,?,?);';
        for ($i=0; $i < 10; $i++) { 
            DB::insert($queryInsert,['diary','1','status',null,null,null]);
        }
    }
}
