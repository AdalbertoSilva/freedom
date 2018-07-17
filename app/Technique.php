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
        'user_id'
    ];
}
