<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieImage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'movie_id',
        'image',
    ];

    public function image()
    {
        return $this->belongsTo(Movie::class);
    }
}
