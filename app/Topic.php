<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {

	protected $fillable = [

		'name',
		'slug',
		'active',
   	'description',
		'subject_id'

		];


	public function subject()
	{
		return $this->belongsTo('App\Subject');
	}


/*
	public function getSubjectListAttribute()
	{
		return $this->subjects->lists('id');
	}
*/
	public function projects()
	{
	//return $this->hasMany('SemesterSubject')->with('Subject');
	return $this->belongsToMany('App\Project');
	}

	public function nodes()
	{
		return $this->hasMany('App\Node');
	}

}
