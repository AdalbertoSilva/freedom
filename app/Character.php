<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'character_points',
        'complication_level',
        'created_at',
        'description',
        'destino_points',
        'exhaustion_level',
        'id',
        'name',
        'party_id',
        'user_id'
    ];
}
