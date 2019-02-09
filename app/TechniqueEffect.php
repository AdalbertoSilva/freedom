<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechniqueEffect extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function technique()
    {
        return $this->belongsTo('App\Technique', 'effect_id');
    }
}
