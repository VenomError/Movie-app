<?php

namespace App\Models;

use App\Models\ShowTime;
use App\Models\MovieImage;
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

    public function showTimes()
    {
        return $this->hasMany(ShowTime::class);
    }

    public function images()
    {
        return $this->hasMany(MovieImage::class);
    }
}
