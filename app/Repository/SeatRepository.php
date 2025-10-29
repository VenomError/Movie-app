<?php

namespace App\Repository;

use App\Models\Hall;
use App\Models\Seat;
use App\Enum\SeatType;
use Illuminate\Support\Facades\DB;

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


    public function generateSeats(
        Hall $hall,
        SeatType $type = SeatType::REGULAR,
        string $rowsStart = 'A',
        string $rowsEnd = 'E',
        int $colsStart = 1,
        int $colsEnd = 10
    ) {
        DB::beginTransaction();

        try {
            $cinema = $hall->cinema;
            if (!$cinema) {
                throw new \Exception("Cinema not found for the selected hall.");
            }

            // Ambil 2 huruf pertama dari nama cinema (huruf saja)
            $cinemaCode = strtoupper(substr(preg_replace('/[^A-Za-z]/', '', $cinema->name), 0, 2));

            $rows = range($rowsStart, $rowsEnd);
            $cols = range($colsStart, $colsEnd);

            foreach ($rows as $row) {
                foreach ($cols as $col) {
                    Seat::updateOrCreate(
                        [
                            'hall_id' => $hall->id,
                            'seat_code' => "{$cinemaCode}-{$row}{$col}", // key unik
                        ],
                        [
                            'seat_number' => "{$row}-{$col}",
                            'type' => $type->value, // pastikan enum disimpan sebagai string
                        ]
                    );
                }
            }

            DB::commit();

            sweetalert("Generate seats success!", type: 'success', title: 'Success');
            return $hall->seats()->get();

        } catch (\Throwable $th) {
            DB::rollBack();
            sweetalert($th->getMessage(), type: 'error', title: 'Generate Failed');
            return false;
        }

    }

}
