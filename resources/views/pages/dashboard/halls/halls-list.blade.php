<?php
use App\Models\Hall;
use App\Models\Cinema;
use Livewire\Volt\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;

new #[Layout('components.layouts.dashboard', ['title' => 'List Hall'])] class extends Component {
    use WithPagination;

    public $listeners = [
        'reloadPage' => 'render'
    ];

    #[Computed]
    public function halls(){
       return Hall::with('cinema')
        ->orderBy(
            Cinema::select('name')
                ->whereColumn('cinemas.id', 'halls.cinema_id')
        )
        ->paginate(5);

    }

    

};
?>
<div>
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">

                    <x-table>
                        <x-slot:head>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Total Seats</th>
                                <th></th>
                            </tr>
                        </x-slot:head>
                        <x-slot:body>
                            @forelse ($this->halls() as $hall)
                                <tr>
                                    <td>{{ $this->halls()->firstItem() + $loop->index }}</td>
                                    <td>{{ $hall->name }}</td>
                                    <td>{{ $hall->cinema->name }}</td>
                                    <td>{{ $hall->seats()->count() }}</td>
                                    <td></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">
                                        <div
                                            class="d-flex flex-column align-items-center justify-content-center text-muted py-5">
                                            <i class="ti ti-screen-share-off" style="font-size: 3rem;"></i>
                                            <div class="fw-semibold mt-2">Tidak ada data hall</div>
                                            <small>Tambahkan data hall terlebih dahulu</small>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </x-slot:body>
                        <x-slot:footer>
                            {{ $this->halls()->links() }}
                        </x-slot:footer>
                    </x-table>

                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <livewire:halls.halls-add />
                </div>
            </div>
        </div>
    </div>
</div>
