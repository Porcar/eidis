<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Project;
use App\Objective;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TasksController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Project $project, Objective $objective)
	{
		return view('tasks.index', compact('project', 'objective'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Project $project, Objective $objective)
	{
		return view('tasks.create', compact('project', 'objective'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Project $project, Objective $objective)
	{
		$input = Input::all();
		$input['objective_id'] = $objective->id;
		Task::create( $input );

		return Redirect::route('projects.objectives.show', [$project->slug, $objective->slug])->with('message', 'Task created.');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Project $project, Objective $objective, Task $task)
	{
		return view('tasks.show', compact('project', 'objective', 'task'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Project $project, Objective $objective, Task $task)
	{
		return view('tasks.edit', compact('project', 'objective', 'task'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Project $project, Objective $objective, Task $task)
	{
		$input = array_except(Input::all(), '_method');
		$task->update($input);

		return Redirect::route('projects.objectives.tasks.show', [$project->slug, $objective->slug, $task->slug])->with('message', 'Task updated.');		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Project $project, Objective $objective, Task $task)
	{
		$task->delete();

		return Redirect::route('projects.objectives.show', [$project->slug, $objective->slug])->with('message', 'Actividad Eliminada.');
	}

}
