<?php
use Carbon\Carbon;
use App\Models\Movie;
use Livewire\Volt\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

new class extends Component {
    use WithPagination;

    #[Computed]
    public function movies()
    {
        return Movie::orderBy('title')->paginate();
    }
};
?>

<x-table>
    <x-slot:head>
        <tr>
            <th>No</th>
            <th>Movie</th>
            <th>Genre</th>
            <th>Rating</th>
            <th>Release Date</th>
            <th>Created At</th>
            <th></th>
        </tr>
    </x-slot:head>
    <x-slot:body>
        @forelse ($this->movies() as $movie)
            <tr>
                <td>{{ $this->movies()->firstItem() + $loop->index }}</td>
                <td>
                    <x-movie.table-card :movie="$movie" />
                </td>
                <td>{{ $movie->duration_human }}</td>
                <td>{{ $movie->rating }}</td>
                <td>{{ $movie->release_date->translatedFormat('d F Y') }}</td>
                <td>{{ $movie->created_at->translatedFormat('d F Y') }}</td>
                <td></td>
            </tr>
        @empty
            <tr>
                <td colspan="7">
                    <div class="d-flex flex-column align-items-center justify-content-center text-muted py-5">
                        <i class="ti ti-device-tv-off" style="font-size: 3rem;"></i>
                        <div class="fw-semibold mt-2">Tidak ada data movie</div>
                        <small>Tambahkan data movie terlebih dahulu</small>
                    </div>
                </td>
            </tr>
        @endforelse
    </x-slot:body>
    <x-slot:footer>
        {{ $this->movies()->links() }}
    </x-slot:footer>
</x-table>
