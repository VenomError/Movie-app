<?php

namespace App\Models;

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
}
