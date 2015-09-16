<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class node extends Model {

	protected $fillable = [

		'name',
		'description'
		'link'
		'image'
		'topic_id',
		];

	public function topic()
	{
		return $this->belongsTo('App\Topic');
	}


}
