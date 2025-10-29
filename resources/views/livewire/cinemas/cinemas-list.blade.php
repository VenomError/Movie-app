<?php
use App\Models\Cinema;
use Livewire\Volt\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

new class extends Component {
    use WithPagination;
    #[Computed]
    public function cinemas()
    {
        return Cinema::orderBy('name')->paginate(5);
    }
};
?>
<div>
    <x-table>
        <x-slot:head>
            <tr>
                <th>No</th>
                <th>Cinema</th>
                <th>City</th>
                <th>Address</th>
                <th>Created At</th>
                <th></th>
            </tr>
        </x-slot:head>
        <x-slot:body>
            @forelse ($this->cinemas() as $cinema)
                <tr>
                    <td>{{ $this->cinemas()->firstItem() + $loop->index }}</td>
                    <td>
                        <x-cinema.table-card :cinema="$cinema" />
                    </td>
                    <td>{{ $cinema->city }}</td>
                    <td>{{ $cinema->address }}</td>
                    <td>{{ $cinema->created_at->translatedFormat('d F Y') }}</td>
                    <td></td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">
                        <div class="d-flex flex-column align-items-center justify-content-center text-muted py-5">
                            <i class="ti ti-device-tv-off" style="font-size: 3rem;"></i>
                            <div class="fw-semibold mt-2">Tidak ada data cinema</div>
                            <small>Tambahkan data cinema terlebih dahulu</small>
                        </div>
                    </td>
                </tr>
            @endforelse
        </x-slot:body>
        <x-slot:footer>
            {{ $this->cinemas()->links() }}
        </x-slot:footer>
    </x-table>
</div>
