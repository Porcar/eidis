<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsObjectivesTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->default('');
			$table->text('description')->default('');
			$table->string('slug')->default('');
			$table->integer('participant')->default(0);
			$table->integer('percentage')->default(0);
			$table->timestamp('startDate');
			$table->timestamp('endDate');
			$table->integer('active')->default(0);
			$table->timestamps();

		});


		Schema::create('objectives', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->default('');
			$table->text('description')->default('');
			$table->string('slug')->default('');
			$table->timestamp('startDate');
			$table->timestamp('endDate');
			$table->integer('active')->default(0);
			$table->boolean('completed')->default(false);
			$table->timestamps();

			$table->integer('project_id')->unsigned()->default(0);
			$table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
		});


		Schema::create('tasks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->default('');
			$table->text('description')->default('');
			$table->string('slug')->default('');
			$table->integer('active')->default(1);
			$table->boolean('completed')->default(false);
			$table->timestamps();

			$table->integer('objective_id')->unsigned()->default(0);
			$table->foreign('objective_id')->references('id')->on('objectives')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tasks');
		Schema::drop('objectives');
		Schema::drop('projects');
	}

}
