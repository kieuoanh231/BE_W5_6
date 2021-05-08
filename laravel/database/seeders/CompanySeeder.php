<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $queryInsert='insert into companies values (null,?,?,?,?,?);';
        for ($i=0; $i < 10; $i++) { 
            // DB::insert($queryInsert,["oanh","oanh.hihi","12","hihi","123456789"]);
            DB::table('companies')->insert([
                'category_id' =>"1",
                'company_name' =>"oanh",
                'company_web' => "oanh.hihi",
                'company_address' => "12",
                'company_code' => "hihi",
                'company_phone' => "123456789",
            ]);
        }
    }
}
