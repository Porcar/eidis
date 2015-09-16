<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTopic extends Model {

	public function project() {
        return $this->belongsTo('Project');
    }

    public function topic() {
        return $this->belongsTo('Topic');
    }

}
