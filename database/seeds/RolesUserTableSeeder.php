<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class RolesUserTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('role_user')->delete();

    	$Roleuser = array(

    	[
    		'id' => 1,
    		'role_id' => '1',
    		'user_id' => '1'
		],
  );

      DB::table('role_user')->insert($Roleuser);

    }
}
