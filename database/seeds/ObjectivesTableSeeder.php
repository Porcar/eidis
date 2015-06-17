<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ObjectivesTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('objectives')->delete();

      $objectives = array(
          ['id' => 1, 'name' => 'Objective 1', 'description' => 'desc Objective-1', 'slug' => 'objective-1', 'startDate' => new DateTime, 'endDate' => new DateTime, 'completed' => true, 'created_at' => new DateTime, 'updated_at' => new DateTime, 'project_id' => 1],
          ['id' => 2, 'name' => 'Objective 2', 'description' => 'desc Objective-2', 'slug' => 'objective-2', 'startDate' => new DateTime, 'endDate' => new DateTime, 'completed' => false, 'created_at' => new DateTime, 'updated_at' => new DateTime, 'project_id' => 1],
          ['id' => 3, 'name' => 'Objective 3', 'description' => 'desc Objective-3', 'slug' => 'objective-3', 'startDate' => new DateTime, 'endDate' => new DateTime, 'completed' => false, 'created_at' => new DateTime, 'updated_at' => new DateTime, 'project_id' => 1],
          ['id' => 4, 'name' => 'Objective 4', 'description' => 'desc Objective-4', 'slug' => 'objective-4', 'startDate' => new DateTime, 'endDate' => new DateTime, 'completed' => true, 'created_at' => new DateTime, 'updated_at' => new DateTime, 'project_id' => 2],
          ['id' => 5, 'name' => 'Objective 5', 'description' => 'desc Objective-5', 'slug' => 'objective-5', 'startDate' => new DateTime, 'endDate' => new DateTime, 'completed' => false, 'created_at' => new DateTime, 'updated_at' => new DateTime, 'project_id' => 2],
          ['id' => 6, 'name' => 'Objective 6', 'description' => 'desc Objective-6', 'slug' => 'objective-6', 'startDate' => new DateTime, 'endDate' => new DateTime, 'completed' => false, 'created_at' => new DateTime, 'updated_at' => new DateTime, 'project_id' => 3],
      );

      // Uncomment the below to run the seeder
      DB::table('objectives')->insert($objectives);        // TestDummy::times(20)->create('App\Post');
    }
}
