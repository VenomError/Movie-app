<?php

namespace App\Repository;

use App\Models\Hall;
use App\Models\Seat;

class SeatRepository
{
    public function create(array $data, Hall $hall)
    {
        $seat = new Seat();
        $seat->fill($data);
        $seat->hall()->associate($hall);

        $seat->save();
        return $seat;
    }
}
