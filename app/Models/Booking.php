<?php

namespace App\Models;

use App\Models\Seat;
use App\Models\User;
use App\Models\ShowTime;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $show_time_id
 * @property \Illuminate\Support\Carbon $booking_time
 * @property numeric $total_price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Seat> $seats
 * @property-read int|null $seats_count
 * @property-read ShowTime $showTime
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereBookingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereShowTimeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereUserId($value)
 * @mixin \Eloquent
 */
class Booking extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'show_time_id',
        'booking_time',
        'total_price',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'booking_time' => 'datetime',
        'total_price' => 'decimal',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function showTime()
    {
        return $this->belongsTo(ShowTime::class);
    }

    public function seats()
    {
        return $this->belongsToMany(Seat::class, 'booked_seats');
    }

}
