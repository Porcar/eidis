<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectiveUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objective_user', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('grade');
            $table->integer('state');

            $table->integer('objective_id')->unsigned()->index();
            $table->foreign('objective_id')->references('id')->on('objectives')->onDelete('cascade');
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
        Schema::drop('objective_user');
    }
}
