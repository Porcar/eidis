<?php namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;



class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

		return view('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserRequest $request)
	{
		User::create($request->all());

		return redirect('users');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	/*

	public function show($id)
	{
		$user = User::findOrFail($id);

		return view('users.show', compact('user'));
	}
	*/

	public function show(User $user)
	{
			return view('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

/*
	public function edit($id)
	{
		$user = User::findOrFail($id);

		return view('users.edit', compact('user'));
	}
*/
	public function edit(User $user)
	{
		$roles = Role::lists('type', 'id');
		return view('users.edit', compact('user', 'roles'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UserRequest $request)
	{
		$user = User::findOrFail($id);

		$user->update($request->all());

		return redirect('users');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
