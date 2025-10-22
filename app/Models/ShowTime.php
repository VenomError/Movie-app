<?php

namespace App\Models;

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
}
