<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaltypeUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaltype_user', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('grade');
            $table->integer('state'); 
            $table->integer('evaltype_id')->unsigned()->index();
            $table->foreign('evaltype_id')->references('id')->on('evaltype')->onDelete('cascade');
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
        Schema::drop('evaltype_user');
    }
}
