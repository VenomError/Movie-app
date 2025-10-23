<?php

namespace App\Repository;

use App\Models\Cinema;

class CinemaRepository
{
    public function create(array $data): Cinema
    {
        $cinema = new Cinema();
        $cinema->fill($data);
        $cinema->save();

        return $cinema;
    }
}
