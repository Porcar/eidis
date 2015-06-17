<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SemesterSubject extends Model {

	public function semester() {
        return $this->belongsTo('Semester');
    }

    public function subject() {
        return $this->belongsTo('Subject');
    }

    public function user() {
        return $this->hasMany('User');
    }

}
