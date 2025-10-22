<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $movie_id
 * @property \App\Models\Movie|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage whereMovieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
