<?php
use App\Models\Hall;
use App\Models\Seat;
use App\Enum\SeatType;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use App\Repository\SeatRepository;

new #[Layout('components.layouts.dashboard', ['title' => 'List Seats'])] class extends Component {
    public $halls;
    public $hall;
    public $type = 'regular';
    public $rowsStart = 'A';
    public $rowsEnd = 'E';
    public $colsStart = 1;
    public $colsEnd = 10;

    public function mount()
    {
        $this->halls = Hall::orderBy('name')->get(['name', 'id']);
    }

    public function generateSeats()
    {
        $this->validate([
            'hall' => 'required',
        ]);
        $hall = Hall::find($this->hall);
        $seatRepo = new SeatRepository();
        $seatRepo->generateSeats($hall, SeatType::tryFrom($this->type), $this->rowsStart, $this->rowsEnd, $this->colsStart, $this->colsEnd);
    }

    #[Computed]
    public function seats()
    {
        if ($this->hall) {
            $hall = Hall::with('seats')->find($this->hall);

            if (!$hall) {
                return collect();
            }

            return $hall
                ->seats()
                ->get()
                ->groupBy(function ($seat) {
                    // ambil huruf baris dari seat_number (misal "A-1" atau "A1")
                    return strtoupper(substr($seat->seat_number, 0, 1));
                });
        }

        return collect();
    }

    public function removeSeat(Seat $seat)
    {
        if ($seat->forceDelete()) {
        }
    }
};
?>
@push('style')
    <style>
        .screen {
            width: 100%;
            background: #ccc;
            height: 20px;
            border-radius: 10px;
            margin: 20px 0;
            text-align: center;
            font-weight: bold;
            color: #333;
        }

        .seat-wrapper {
            position: relative;
            display: inline-block;
        }

        .seat {
            width: 35px;
            height: 35px;
            border-radius: 5px;
            margin: 4px;
            text-align: center;
            line-height: 35px;
            cursor: pointer;
            font-size: 14px;
            transition: 0.3s;
        }

        .seat.bg-secondary {
            background-color: #6c757d;
            color: white;
        }

        /* Regular */
        .seat.bg-primary {
            background-color: #0d6efd;
            color: white;
        }

        /* VIP */
        .seat.bg-warning {
            background-color: #ffc107;
            color: #212529;
        }

        /* VVIP */
        .seat.bg-danger {
            background-color: #dc3545;
            color: white;
        }

        /* Occupied */
        .seat-wrapper:hover .seat {
            opacity: 0.3;
        }

        .seat-remove {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            background: rgba(220, 53, 69, 0.9);
            border: none;
            border-radius: 50%;
            width: 28px;
            height: 28px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            padding: 0;
        }

        .seat-wrapper:hover .seat-remove {
            display: flex;
        }
    </style>
@endpush
<div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <!-- Layar -->
                    <div class="screen">LAYAR</div>

                    <!-- Kursi -->
                    <div class="d-flex flex-column align-items-center gap-2">
                        @if ($this->seats()->isEmpty())
                            <div class="text-muted my-4 text-center">
                                Belum ada kursi yang tersedia untuk hall ini.
                            </div>
                        @else
                            @foreach ($this->seats() as $row => $rowSeats)
                                <div class="d-flex gap-2">
                                    @foreach ($rowSeats as $seat)
                                        @php
                                            $seatClass = match ($seat->type->value) {
                                                'regular' => 'bg-secondary',
                                                'vip' => 'bg-primary',
                                                'vvip' => 'bg-warning',
                                                default => 'bg-secondary',
                                            };
                                            if ($seat->is_booked) {
                                                $seatClass = 'bg-danger';
                                            }
                                        @endphp

                                        <div class="seat-wrapper">
                                            <div class="seat {{ $seatClass }}" title="{{ $seat->seat_number }}">
                                                {{ $seat->seat_number }}
                                            </div>
                                            <button
                                                class="seat-remove"
                                                type="button"
                                                title="remove seat"
                                                wire:loading.attr='disabled'
                                                wire:click='removeSeat({{ $seat->id }})'
                                                wire:target='removeSeat({{ $seat->id }})'
                                            >
                                                <i class="ti ti-armchair-off"></i>
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <!-- Legend -->
                    <div class="d-flex align-items-center mt-3 gap-3">
                        <div class="d-flex align-items-center gap-1">
                            <div class="seat bg-warning" style="width:20px; height:20px;"></div><span>VVIP</span>
                        </div>
                        <div class="d-flex align-items-center gap-1">
                            <div class="seat bg-primary" style="width:20px; height:20px;"></div><span>VIP</span>
                        </div>
                        <div class="d-flex align-items-center gap-1">
                            <div class="seat bg-secondary" style="width:20px; height:20px;"></div><span>Regular</span>
                        </div>
                        <div class="d-flex align-items-center gap-1">
                            <div class="seat bg-danger" style="width:20px; height:20px;"></div><span>Occupied</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Generate Form -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent='generateSeats()'>
                        <x-input.select label="Hall" wire:model.live='hall'>
                            @foreach ($halls as $hall)
                                <option value="{{ $hall->id }}">{{ Str::title($hall->name) }}</option>
                            @endforeach
                        </x-input.select>

                        <div class="row">
                            <div class="col-lg-6">
                                <x-input type="text" label="Row Start" wire:model='rowsStart' />
                            </div>
                            <div class="col-lg-6">
                                <x-input type="text" label="Row End" wire:model='rowsEnd' />
                            </div>
                            <div class="col-lg-6">
                                <x-input type="text" label="Col Start" wire:model='colsStart' />
                            </div>
                            <div class="col-lg-6">
                                <x-input type="text" label="Col End" wire:model='colsEnd' />
                            </div>
                        </div>

                        <x-input.select label="Type" wire:model='type'>
                            @foreach (SeatType::cases() as $seatType)
                                <option value="{{ $seatType->value }}">{{ $seatType->name }}</option>
                            @endforeach
                        </x-input.select>

                        <div class="d-flex justify-content-end mt-2">
                            <x-button>Generate Seats</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
