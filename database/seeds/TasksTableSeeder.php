<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class TasksTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('tasks')->delete();

      $tasks = array(
          ['id' => 1, 'name' => 'Task 1', 'slug' => 'task-1', 'objective_id' => 1, 'completed' => false, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 2, 'name' => 'Task 2', 'slug' => 'task-2', 'objective_id' => 1, 'completed' => true, 'description' => 'My second task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 3, 'name' => 'Task 3', 'slug' => 'task-3', 'objective_id' => 2, 'completed' => false, 'description' => 'My 3 task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 4, 'name' => 'Task 4', 'slug' => 'task-4', 'objective_id' => 2, 'completed' => true, 'description' => 'My 4 task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 5, 'name' => 'Task 5', 'slug' => 'task-5', 'objective_id' => 3, 'completed' => true, 'description' => 'My 5 task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 6, 'name' => 'Task 6', 'slug' => 'task-6', 'objective_id' => 3, 'completed' => true, 'description' => 'My 6 task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 7, 'name' => 'Task 7', 'slug' => 'task-7', 'objective_id' => 3, 'completed' => false, 'description' => 'My 7 task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 8, 'name' => 'Task 8', 'slug' => 'task-8', 'objective_id' => 4, 'completed' => false, 'description' => 'My 8 task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 9, 'name' => 'Task 9', 'slug' => 'task-9', 'objective_id' => 4, 'completed' => false, 'description' => 'My 9 task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 10, 'name' => 'Task 10', 'slug' => 'task-10', 'objective_id' => 4, 'completed' => true, 'description' => 'My 10 task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 11, 'name' => 'Task 11', 'slug' => 'task-11', 'objective_id' => 5, 'completed' => true, 'description' => 'My 11 task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 12, 'name' => 'Task 12', 'slug' => 'task-12', 'objective_id' => 5, 'completed' => false, 'description' => 'My 12 task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 13, 'name' => 'Task 13', 'slug' => 'task-13', 'objective_id' => 6, 'completed' => true, 'description' => 'My 13 task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => 14, 'name' => 'Task 14', 'slug' => 'task-14', 'objective_id' => 6, 'completed' => false, 'description' => 'My 14 task', 'created_at' => new DateTime, 'updated_at' => new DateTime],

      );

      //// Uncomment the below to run the seeder
      DB::table('tasks')->insert($tasks);
    }
}
