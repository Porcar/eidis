<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('roles')->delete();

    	$Role = array(

    	[
    		'id' => 1,
    		'name' => 'Admin',
    		'slug' => 'Administrador',
    		'level' => 1
		],
		[
    		'id' => 2,
    		'name' => 'Tutor',
    		'slug' => 'Profesor',
    		'level' => 1
		],
    	[
    		'id' => 3,
    		'name' => 'Assist',
    		'slug' => 'Preparador',
    		'level' => 1
		],
    	[
    		'id' => 4,
    		'name' => 'Student',
    		'slug' => 'Estudiante',
    		'level' => 1
		],
  );

      DB::table('roles')->insert($Role);

    }
}
