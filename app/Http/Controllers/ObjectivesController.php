<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Project;
use App\Objective;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ObjectivesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Project $project)
	{
		return view('objectives.index', compact('project'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Project $project)
	{
		return view('objectives.create', compact('project'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Project $project)
	{
		$input = Input::all();
		$input['project_id'] = $project->id;
		Objective::create( $input );

		return Redirect::route('projects.show', $project->slug)->with('message', 'Objetivo Creado.');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Project $project, Objective $objective)
	{
		return view('objectives.show', compact('project', 'objective'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Project $project, Objective $objective)
	{
		return view('objectives.edit', compact('project', 'objective'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Project $project, Objective $objective)
	{
		$input = array_except(Input::all(), '_method');
		$objective->update($input);

		return Redirect::route('projects.objectives.show', [$project->slug, $objective->slug])->with('message', 'Objetivo Actualizado.');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Project $project, Objective $objective)
	{
		$objective->delete();

		return Redirect::route('projects.show', $project->slug)->with('message', 'Objetivo borrado.');

	}

}
