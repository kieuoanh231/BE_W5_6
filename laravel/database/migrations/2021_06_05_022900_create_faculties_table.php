<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->id('faculty_id');
            $table->string('faculty_name',55);
            $table->integer('user_id');
            $table->integer('class_id');
            $table->string('status',55);
            $table->timestamps();
            $table->softDeletes();
            // $table->primary(array('user_id', 'class_id'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculties');
    }
}
