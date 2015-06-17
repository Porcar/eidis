<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class SubjectsTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('subjects')->delete();

      $subjects = array(
          ['id' => 1, 'name' => 'Fotogrametria a Corta Distancia', 'school' => 'Geomatica', 'department' => 'Fotogrametria', 'description' => 'Esta es la descrip de fotogram', 'created_at' => new DateTime, 'updated_at' => new DateTime],
      );

      // Uncomment the below to run the seeder
      DB::table('subjects')->insert($subjects);
    }
}
