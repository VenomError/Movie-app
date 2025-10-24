<?php

namespace App\Models;

use App\Models\ShowTime;
use App\Models\MovieImage;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $duration
 * @property string $genre
 * @property int $rating
 * @property string|null $thumbnail
 * @property \Illuminate\Support\Carbon $release_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, MovieImage> $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, ShowTime> $showTimes
 * @property-read int|null $show_times_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereReleaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Movie extends Model
{
    protected $fillable = [
        'imdb_id',
        'title',
        'year',
        'rated',
        'release_date',
        'duration',
        'genre',
        'director',
        'writer',
        'actors',
        'description',
        'language',
        'country',
        'awards',
        'thumbnail',
        'rating',
        'votes',
        'type',
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

    /**
     * Accessor: durasi dalam format manusiawi (misal "2 jam 15 menit")
     */
    public function getDurationHumanAttribute(): string
    {
        if (!$this->duration) {
            return '-';
        }

        return CarbonInterval::minutes($this->duration)
            ->cascade() // ubah 90 menit -> 1 jam 30 menit
            ->forHumans(['short' => false, 'join' => true]);
    }


}
