<?php

namespace App\Models;

use App\Models\Seat;
use App\Models\Cinema;
use App\Models\ShowTime;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = [
        'cinema_id',
        'name',
        'total_seat',
    ];

    protected $casts = [
        'total_seat' => 'integer'
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
