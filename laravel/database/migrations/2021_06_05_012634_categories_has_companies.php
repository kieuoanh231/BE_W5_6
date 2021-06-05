<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoriesHasCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('categories_has_companies', function (Blueprint $table) {
            $table->integer("category_id")->unsigned();
            $table->integer("companies_id")->unsigned();
            $table->string("status")->default("");
            $table->primary(["category_id", "companies_id"]);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('categories_has_companies');
    }
}
