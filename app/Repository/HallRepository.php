<?php

namespace App\Repository;

use App\Models\Hall;
use App\Models\Seat;
use App\Models\Cinema;
use App\Repository\SeatRepository;

class HallRepository
{
    public function create(array $data, Cinema $cinema): Hall
    {
        $hall = new Hall();
        $hall->fill($data);
        $hall->cinema()->associate($cinema);

        $hall->save();
        return $hall;
    }

    public function addSeat(array $data, Hall $hall): Seat
    {
        $seatRepo = new SeatRepository();
        return $seatRepo->create($data, $hall);
    }

}
