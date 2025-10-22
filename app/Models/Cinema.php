<?php

namespace App\Models;

use App\Models\Hall;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{

    protected $fillable = [
        'name',
        'city',
        'address',
        'latitude',
        'longitude',
    ];

    public function halls()
    {
        return $this->hasMany(Hall::class);
    }
}
