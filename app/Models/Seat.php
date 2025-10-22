<?php

namespace App\Models;

use App\Models\Hall;
use App\Enum\SeatType;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $hall_id
 * @property string $seat_code
 * @property string $seat_number
 * @property SeatType $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Booking> $bookings
 * @property-read int|null $bookings_count
 * @property-read Hall $hall
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat whereHallId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat whereSeatCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat whereSeatNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Seat extends Model
{
    protected $fillable = [
        'hall_id',
        'seat_code',
        'seat_number',
        'type',
    ];

    protected $casts = [
        'type' => SeatType::class
    ];

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }

    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'booked_seats');
    }
}
