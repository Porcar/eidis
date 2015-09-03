<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class topic extends Model {

	protected $fillable = [

		'name',
		'slug',
		'active',
		'subject_id',
		'description'

		];

	public function subject()
	{
		return $this->belongsTo('App\Subject');
	}

	public function projects()
	{
		//return $this->hasMany('SemesterSubject')->with('Subject');
		return $this->belongsToMany('App\Project');
	}

	public function getSubjectListAttribute()
	{
		return $this->subjects->lists('id');
	}

}
