<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topics', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('slug')->default('');
			$table->string('name')->default('');
			$table->mediumText('description')->default('');
			$table->integer('active')->default(1);
			$table->timestamps();

			$table->integer('subject_id')->unsigned()->default(0);
			$table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
		});

		Schema::create('nodes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->default('');
			$table->text('description')->default('');
			$table->string('link')->default('');
			$table->string('image')->default('');
			$table->timestamps();

			$table->integer('topic_id')->unsigned()->default(0);
			$table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
		});

		Schema::create('node_links', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('father_id');
			$table->integer('node_id');
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
		Schema::drop('node_links');
		Schema::drop('nodes');
		Schema::drop('topics');

	}

}
