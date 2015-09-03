<?php namespace App\Http\Controllers;

use App\Topic;
use App\Subject;
use App\Http\Requests;
use App\Http\Requests\TopicRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;


class TopicsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Topic $topic)
	{
		$subjects = Subject::lists('name', 'id');

		return view('topics.create', compact('subjects'));
	}

	public function store(TopicRequest $request)
	{


		$this->createTopic($request);

		return redirect('home');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Topic $topic)
	{
		return view('topics.show', compact('topic'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Topic $topic)
	{
		return view('topics.show', compact('topic'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Topic $topic)
	{
		$input = array_except(Input::all(), '_method');
		$topic->update($input);

		//return Redirect::route('projects.classes.show', [$subject->slug, $class->slug])->with('message', 'Objetivo Actualizado.');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Topic $topic)
	{
		$topic->delete();

	//	return Redirect::route('projects.show', $subject->slug)->with('message', 'Objetivo borrado.');

	}

	private function syncTopic(Topic $topic, array $subjects)
	{
			$topic->subjects()->sync($subjecs);
	}

	private function createTopic(TopicRequest $request)
	{

				$topic = Topic::create($request->all());

				$this->syncSubject($topic, $request->input('subject_list'));

				return $topic;
	}


}
