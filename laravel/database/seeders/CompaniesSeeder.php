<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        for($i = 0; $i < 10; $i++){
            DB::table('companies')->insert([
                'company_name' => 'company ' . ($i + 1),
                'company_web' => 'web ' . ($i + 1),
                'company_address' => 'Thu Duc city ' . ($i + 1),
                'company_code' => '012547' . $i,
                'company_phone' => '01230123' .$i
            ]);
        }

    }

}
