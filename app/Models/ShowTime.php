<?php

namespace App\Models;

use App\Models\Hall;
use App\Models\Movie;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @property int $id
 * @property int $movie_id
 * @property int $hall_id
 * @property \Illuminate\Support\Carbon $start_time
 * @property numeric $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Booking> $bookings
 * @property-read int|null $bookings_count
 * @property-read Hall $hall
 * @property-read Movie $movie
 * @method static Builder<static>|ShowTime belumTayang()
 * @method static Builder<static>|ShowTime newModelQuery()
 * @method static Builder<static>|ShowTime newQuery()
 * @method static Builder<static>|ShowTime query()
 * @method static Builder<static>|ShowTime sedangTayang()
 * @method static Builder<static>|ShowTime sudahTayang()
 * @method static Builder<static>|ShowTime whereCreatedAt($value)
 * @method static Builder<static>|ShowTime whereHallId($value)
 * @method static Builder<static>|ShowTime whereId($value)
 * @method static Builder<static>|ShowTime whereMovieId($value)
 * @method static Builder<static>|ShowTime wherePrice($value)
 * @method static Builder<static>|ShowTime whereStartTime($value)
 * @method static Builder<static>|ShowTime whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ShowTime extends Model
{

    protected $fillable = [
        'movie_id',
        'hall_id',
        'start_time',
        'price',
    ];

    protected $casts = [
        'price' => 'decimal',
        'start_time' => 'datetime',
    ];

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // 🔹 Scope: Belum tayang
    public function scopeBelumTayang(Builder $query): Builder
    {
        return $query->where('start_time', '>', now());
    }

    // 🔹 Scope: Sedang tayang
    public function scopeSedangTayang(Builder $query): Builder
    {
        return $query->where('start_time', '<=', now())
            ->whereHas('movie', function ($movieQuery) {
                $movieQuery->whereRaw('DATE_ADD(show_times.start_time, INTERVAL movies.duration MINUTE) >= ?', [now()]);
            });
    }

    // 🔹 Scope: Sudah tayang
    public function scopeSudahTayang(Builder $query): Builder
    {
        return $query->whereHas('movie', function ($movieQuery) {
            $movieQuery->whereRaw('DATE_ADD(show_times.start_time, INTERVAL movies.duration MINUTE) < ?', [now()]);
        });
    }
}
