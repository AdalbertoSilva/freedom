<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    protected $fillable = [
        'name',
        'difficulty',
        'effect',
        'form',
        'area',
        'duration',
        'execution',
        'restriction',
        'description',
        'user_id',
		'skill_id',
        'effect_id'
    ];

	/**
	 * Get the phone record associated with the user.
	 */
	public function skill()
	{
		return $this->belongsTo('App\Skill');
	}

    public function techniqueEffect()
    {
        return $this->hasOne('App\TechniqueEffect');
    }
}