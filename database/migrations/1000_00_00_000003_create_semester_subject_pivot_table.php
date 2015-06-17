<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemesterSubjectPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester_subject', function(Blueprint $table) {
            $table->increments('id');

            //references to semesters table
            $table->integer('semester_id')->unsigned()->index();
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade');

            //references to subjects table
            $table->integer('subject_id')->unsigned()->index();
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('semester_subject');
    }
}
