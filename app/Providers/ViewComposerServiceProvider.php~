<?php namespace App\Providers;

use App\Subject;
use App\User;
use App\Project;
use App\Topic;
use Illuminate\Support\ServiceProvider;


class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */


	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}


	public function boot()
	{
			$this->composeIndex();
			$this->composeSidebar();
			$this->composeSidebar2();
			$this->composeHome();
	}


	//	Compose the sidebar



	private function composeIndex()
	{

		//Checks if the subject table is empty, if it is, it sends a placeholder

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

	}


	private function composeSidebar()
	{

			view()->composer('partials.sidebar', function($view){
				$view->with('projects', Project::all());
			});

	}

	private function composeSidebar2()
	{

			view()->composer('partials.sidebar', function($view){
				$view->with('topics', Topic::all());
			});

	}


	private function composeHome()
	{
		//Checks if the subject table is empty, if it is, it sends a placeholder


			if (Subject::all()->isEmpty()) {

				view()->composer('home', function($view){
					$view->with('name', 'Sistema EIDIS');
					$view->with('description','Sistema EIDIS');
					$view->with('school', 'Sistema EIDIS');
					$view->with('department', 'Sistema EIDIS');
				});

			}else{


				view()->composer('home', function($view){
					$view->with('name', Subject::first()->name);
					$view->with('description', Subject::first()->description);
					$view->with('school', Subject::first()->school);
					$view->with('department', Subject::first()->department);

				});

			}

		
	}


}
