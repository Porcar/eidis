<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->default('');
			$table->string('email')->unique()->default('');
			$table->string('password', 60)->default('');
			$table->string('identification')->unique()->default('');
			$table->string('phone')->default('');
			$table->integer('active')->default(0);
			$table->rememberToken();
			$table->timestamps();
			//refences to semester in pivot table semester_subject
			//$table->integer('semester_subject_id')->unsigned()->nullable()->default(null);
			//$table->foreign('semester_subject_id')->references('id')->on('semester_subject')->onDelete('cascade')->onUpdate('cascade');



		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
