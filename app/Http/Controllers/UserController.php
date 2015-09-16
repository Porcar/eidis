<?php namespace App\Http\Controllers;

use Input;
use Redirect;
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

	public function create()
	{

	}

	public function store()
	{
				return Redirect::route('users.index')->with('message', 'Project created');
	}
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
		return view('users.edit', compact('user', 'roles'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	//public function update($id, UserRequest $request)
	public function update(User $user)
	{
	//	$user = User::findOrFail($id);

		//$user->update($request->all());

		$input = array_except(Input::all(), '_method');
		$user->update($input);

		return redirect('users');
	}

	public function update2($id)
	{
		$user = User::findOrFail($id);

		if ($user->active == "1") {
			$user->active = "0";
		}else {
			$user->active = "1";
		}
		$user->save();

		return redirect('users');
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(User $user)
	{
		$user->delete();
   	return redirect('users');
	}

}
