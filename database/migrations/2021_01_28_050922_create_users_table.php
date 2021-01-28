<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('fullName', 100)->require();
            $table->integer('birthday')->require();
            $table->string('email', 50)->unique();
            $table->string('phoneNumber', 20)->unique();
            $table->string('job')->require();
            $table->string('avatar')->require();
            $table->string('facebook')->require();
            $table->tinyInteger('gender')->require();
            $table->string('country', 50)->require();
            $table->tinyInteger('role')->require();
            $table->tinyInteger('status')->default(STATUS_USER_PENDING);
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
        Schema::dropIfExists('users');
    }
}
