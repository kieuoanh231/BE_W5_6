<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesHasCompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0; $i < 10; $i++){
            DB::table('categories_has_companies')->insert(
                [
                    "category_id" => ($i + 1),
                    "companies_id" => 1
                ]
            );
        }

    }
}
