<?php

namespace App\Models;

use App\Models\Seat;
use App\Models\Cinema;
use App\Models\ShowTime;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $cinema_id
 * @property string $name
 * @property int $total_seat
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Cinema $cinema
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Seat> $seats
 * @property-read int|null $seats_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, ShowTime> $showTimes
 * @property-read int|null $show_times_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall whereCinemaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall whereTotalSeat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Hall extends Model
{
    protected $fillable = [
        'cinema_id',
        'name',
    ];


   public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    public function showTimes()
    {
        return $this->hasMany(ShowTime::class);
    }
}
