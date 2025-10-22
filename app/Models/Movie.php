<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'description',
        'duration',
        'genre',
        'rating',
        'thumbnail',
        'release_date'
    ];
    protected $casts = [
        'release_date' => 'datetime',
        'rating' => 'integer',
        'duration' => 'integer'
    ];
}
