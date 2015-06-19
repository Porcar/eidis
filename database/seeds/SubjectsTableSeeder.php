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
          ['id' => 1, 'name' => 'Fotogrametria de Corta Distancia', 'school' => 'Geomatica', 'department' => 'Fotogrametria', 'description' => 'Materia dictada por el profesor Manuel Jauregui', 'created_at' => new DateTime, 'updated_at' => new DateTime],
      );

      // Uncomment the below to run the seeder
      DB::table('subjects')->insert($subjects);
    }
}
