<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaryContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_contents', function (Blueprint $table) {
            $table->id('diarycontent_id');
            $table->string('diarycontent_weekday');
            $table->string('diarycontent_work');
            $table->string('diarycontent_content');
            $table->string('diarycontent_note');
            $table->string('diarycontent_teacher_comment');
            $table->string('diarycontent_trainer_comment');
            $table->integer('week_id');
            $table->string('status',55);
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
        Schema::dropIfExists('diary_contents');
    }
}
