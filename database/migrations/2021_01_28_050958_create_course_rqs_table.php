<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_rqs', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->tinyInteger('frequency')->require();
            $table->integer('durationTime')->require();
            $table->tinyInteger('targetTop')->require();
            $table->tinyInteger('wishJob')->require();
            $table->tinyInteger('completeExercise')->require();
            $table->tinyInteger('outCondition')->require();
            $table->string('nowSkill')->require();
            $table->string('mission')->require();
            $table->unsignedBigInteger('classId');
            $table->foreign('classId')->references('id')->on('classes');
            $table->tinyInteger('status')->default(STATUS_COURSE_NO);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_rqs');
    }
}
