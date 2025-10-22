<?php

namespace App\Models;

use App\Models\Hall;
use App\Models\Movie;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;

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
}
