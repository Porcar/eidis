<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('classes', function(Blueprint $table)
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
			$table->string('slug')->default('');
			$table->integer('active')->default(1);
			$table->string('link')->default('');
			$table->integer('childof')->default(0);
			$table->timestamps();

			$table->integer('class_id')->unsigned()->default(0);
			$table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nodes');
		Schema::drop('classes');
	}

}
