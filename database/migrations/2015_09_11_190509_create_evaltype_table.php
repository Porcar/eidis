<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaltypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evaltype', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('description')->default('');
			$table->integer('question_type');
			$table->integer('question_number');
			$table->integer('active')->default(0);

			$table->timestamps();

			$table->integer('topic_id')->unsigned()->default(0);
			$table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('evaltype');
	}

}
