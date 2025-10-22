<?php

namespace App\Models;

use App\Models\Seat;
use App\Models\User;
use App\Models\ShowTime;
use Illuminate\Database\Eloquent\Model;

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
