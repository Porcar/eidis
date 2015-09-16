<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemesterSubjectUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester_subject_user', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('active')->default(0);
            $table->integer('semester_subject_id')->unsigned()->index();
            $table->foreign('semester_subject_id')->references('id')->on('semester_subject')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('semester_subject_user');
    }
}
