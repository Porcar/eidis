<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class SemestersTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('semesters')->delete();

      $semesters = array(
          ['id' => 1, 'code' => 'B-2014', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 2, 'code' => 'A-2015', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 3, 'code' => 'B-2015', 'created_at' => new DateTime, 'updated_at' => new DateTime],
      );

      // Uncomment the below to run the seeder
      DB::table('semesters')->insert($semesters);
    }
}
