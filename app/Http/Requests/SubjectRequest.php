<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SubjectRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [

			'name' => 'required|min:4',
			'school' => 'required|min:4',
			'department' => 'required|min:4',
			'description' => 'required|min:10'

		];
	}

}
