<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechniqueEffect extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function technique()
    {
        return $this->hasOne('App\Technique');
    }
}
