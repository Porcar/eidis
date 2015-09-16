<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaltypeUserQuestionPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaltype_user_question', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_answers'); 
            $table->integer('evaltype_user_id')->unsigned()->index();
            $table->foreign('evaltype_user_id')->references('id')->on('evaltype_user')->onDelete('cascade');
            $table->integer('question_id')->unsigned()->index();
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('evaltype_user_question');
    }
}
