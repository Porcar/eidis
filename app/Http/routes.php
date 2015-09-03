<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Provide controller methods with object instead of ID
Route::model('tasks', 'Task');
Route::model('objectives', 'Objective');
Route::model('projects', 'Project');
Route::model('users', 'User');
Route::model('topics', 'Topic');


// Use slugs rather than IDs in URLs

Route::bind('users', function($value, $route) {
	return App\User::whereId($value)->first();
});
Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});
Route::bind('objectives', function($value, $route) {
	return App\Objective::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
	return App\Project::whereSlug($value)->first();
});
Route::bind('topics', function($value, $route) {
	return App\Topic::whereSlug($value)->first();
});


Route::get('home', ['uses' => 'HomeController@index', 'as' => 'home.index']);

Route::get('/', ['uses' => 'WelcomeController@index', 'as' => 'welcome.index']);

Route::get('welcome', ['uses' => 'SubjectController@index', 'as' => 'subject.index']);

Route::resource('users', 'UserController');

Route::resource('subjects', 'SubjectController');

Route::resource('topics', 'TopicsController');

Route::resource('projects', 'ProjectsController');

Route::resource('projects.objectives', 'ObjectivesController');

Route::resource('projects.objectives.tasks', 'TasksController');

//Route::resource('subjects.users', 'UserController'); <- not sure
//Route::resource('subjects.topics', 'TopicsController');
//Route::resource('subjects.topics.evaluations', 'EvaluationsController');
//Route::resource('subjects.projects', 'ProjectsController');
//Route::resource('subjects.projects.objectives', 'ObjectivesController');
//Route::resource('subjects.projects.objectives.tasks', 'TasksController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
