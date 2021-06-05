<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
            DB::table('users')->insert(
                [
                    "user_name" => "Huy Son $i",
                    "user_email" => "huyson12$i@gmail.com",
                    "user_password" => "asdasd12$i",
                    "user_type_id" => rand(1,4),
                    "faculty_id" => rand(1,4)
                ]
            );
        }
    }
}
