<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TopicRequest extends Request {

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
			'slug' => 'required|min:2',
			'description' => 'required|min:10'
		];
	}

}
