<?php namespace App;

use App\SemesterSubject;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model {

	protected $fillable = [

		'name',
		'school',
		'department',
		'description'

		];

		public function semesters()
		{
			//return $this->hasMany('SemesterSubject')->with('Semester');
			return $this->belongsToMany('App\Semester');
		}


		public function getSemesterListAttribute()
		{
			return $this->semesters->lists('id');
		}


}
