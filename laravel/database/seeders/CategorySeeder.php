<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $queryInsert='insert into categories values (null,?);';
        DB::insert($queryInsert,['A']);
        DB::insert($queryInsert,['B']);
        DB::insert($queryInsert,['C']);
    }
}
