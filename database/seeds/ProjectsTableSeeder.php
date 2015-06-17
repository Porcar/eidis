<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('projects')->delete();

      $projects = array(
          ['id' => 1, 'subject_id' => 1, 'name' => 'Project 1', 'description' => 'desc project-1', 'slug' => 'project-1', 'participant' => '4', 'percentage' => '15', 'startDate' => new DateTime, 'endDate' => new DateTime, 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 2, 'subject_id' => 1, 'name' => 'Project 2', 'description' => 'desc project-2', 'slug' => 'project-2', 'participant' => '5', 'percentage' => '20', 'startDate' => new DateTime, 'endDate' => new DateTime, 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 3, 'subject_id' => 1, 'name' => 'Project 3', 'description' => 'desc project-3', 'slug' => 'project-3', 'participant' => '6', 'percentage' => '25', 'startDate' => new DateTime, 'endDate' => new DateTime, 'created_at' => new DateTime, 'updated_at' => new DateTime],
      );

      // Uncomment the below to run the seeder
      DB::table('projects')->insert($projects);        // TestDummy::times(20)->create('App\Post');
    }
}
