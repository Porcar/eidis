<?php namespace App\Http\Controllers;

use App\Subject;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
			if (Subject::all()->isEmpty()) {

				view()->composer('index', function($view){
					$view->with('name', 'Sistema EIDIS');
					$view->with('description','Sistema EIDIS');
					$view->with('school', 'Sistema EIDIS');
					$view->with('department', 'Sistema EIDIS');
				});

			}else{


				view()->composer('index', function($view){
					$view->with('name', Subject::first()->name);
					$view->with('description', Subject::first()->description);
					$view->with('school', Subject::first()->school);
					$view->with('department', Subject::first()->department);

				});



		}

		return view('index');
	}

	public function welcomeScreen()
	{
		return view('welcome');
	}

}
