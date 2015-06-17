<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	protected $guarded = [];

	public function objectives()
	{
		return $this->hasMany('App\Objective');
	}//

}
