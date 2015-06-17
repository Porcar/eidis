<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model {

	protected $fillable = [

		'code',
		'active'
		];

	/**
		*Get the subjects associated with the given semesters
	*/

	public function subjects()
	{
		//return $this->hasMany('SemesterSubject')->with('Subject');
		return $this->belongsToMany('App\Subject');
	}



}
