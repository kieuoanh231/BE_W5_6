<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainersSeeder extends Seeder
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
            DB::table('trainers')->insert([
                "user_id" => ($i + 1),
                'company_id' => ($i + 1),
            ]);

        }

        // Schema::create('trainers', function (Blueprint $table) {
        //     $table->integer('trainer_id')->primary();
        //     $table->integer('company_id');
        //     $table->integer('is_leader');
        //     $table->string("status")->default("");
        //     $table->timestamps();
        //     $table->softDeletes();
        // });
    }
}
