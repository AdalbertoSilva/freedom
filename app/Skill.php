<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
	protected $fillable = [
		'id',
		'name',
		'description',
		'user_id'
	];

	public function technique()
	{
		return $this->hasOne('App\Techniques');
	}
}
