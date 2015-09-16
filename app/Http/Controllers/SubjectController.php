<?php namespace App\Http\Controllers;

use App\Subject;
use App\Semester;
use App\Http\Requests;
use App\Http\Requests\SubjectRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;


class SubjectController extends Controller {

//This checks if the user is logged in.

	public function __construct()
	{
		$this->middleware('auth', ['only' => 'create', 'edit']);
	}


	public function index()
	{

			$subjects = Subject::all();

			return view('subjects.index', compact('subjects'));
	}

	public function show(Subject $subject)
	{
			return view('subjects.show', compact('subject'));
	}

	public function create()
	{
		$semesters = Semester::lists('code', 'id');

		return view('subjects.create', compact('semesters'));
	}

	public function store(SubjectRequest $request)
	{
		//Auth::user()->subjects()->create($request->all());

		$this->createSubject($request);

		//flash('Ha sido creado con exito')->important();
		//flash()->overlay('Ha sido creado con exito', 'Buen Trabajo');
		flash('Ha sido creado con exito');

		return redirect('subjects');
	}

	public function edit(Subject $subject)
	{
		$semesters = Semester::lists('code', 'id');
		return view('subjects.edit', compact('subject', 'semesters'));
	}

	public function update(Subject $subject, SubjectRequest $request)
	{
		$subject->update($request->all());

		$this->syncSemesters($subject, $request->input('semester_list'));

		return redirect('subjects');
	}

	public function destroy(Subject $subject)
	{

		$subject->delete();

		return redirect('subjects');

	}

	private function syncSemesters(Subject $subject, array $semesters)
	{
			$subject->semesters()->sync($semesters);
	}

	private function createSubject(SubjectRequest $request)
	{

				$subject = Subject::create($request->all());

				$this->syncSemesters($subject, $request->input('semester_list'));

				return $subject;
	}



}
