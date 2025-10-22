<?php

namespace App\Models;

use App\Enum\SeatType;
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
}
