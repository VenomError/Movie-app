<?php

namespace App\Models;

use App\Models\Hall;
use App\Enum\SeatType;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;

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
