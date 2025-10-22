<?php

namespace App\Repository;

use App\Models\Booking;
use App\Models\ShowTime;
use App\Models\User;
use Carbon\Carbon;

class BookingRepository
{
    public function create(User $user, ShowTime $showTime, $total_price = 0): Booking
    {
        $booking = new Booking();
        $booking->user()->associate($user);
        $booking->showTime()->associate($showTime);
        $booking->booking_time = now();
        $booking->total_price = $total_price;

        $booking->save();

        return $booking;
    }

    public function createWithSeats(User $user, ShowTime $showTime, $total_price = 0, array $seatIds): Booking
    {
        $booking = $this->create($user, $showTime, $total_price);
        if (!empty($seatIds)) {
            $booking->seats()->syncWithoutDetaching($seatIds);
        }

        return $booking->load(['seats', 'user', 'showTime']);
    }
}
