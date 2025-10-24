<?php
use Livewire\Attributes\Url;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Services\OmdbAPIService;
use Livewire\Attributes\Computed;
use App\Repository\MovieRepository;

new #[Layout('components.layouts.dashboard', ['title' => 'Search Movie'])] class extends Component {
    #[Url('search')]
    public $search;
    #[Url('page')]
    public $page = 1;
    public $totalResults = 0;
    public $results = [];

    public function mount()
    {
        if ($this->search) {
            $this->getResults();
        }
    }

    public function updatedSearch()
    {
        $this->reset('page');
    }
    public function updatedPage()
    {
        $this->reset('results');
    }

    public function getResults()
    {
        $this->validate([
            'search' => 'required|string',
            'page' => 'required|integer|gt:0',
        ]);
        $apiService = new OmdbAPIService();
        $results = $apiService->search($this->search, $this->page);
        $this->totalResults = $results->get('totalResults');
        $this->results = $results->get('movies');
    }

    public function addMovie($imdb_id)
    {
        try {
            $apiService = new OmdbAPIService();
            $movie = $apiService->findById($imdb_id);
            if (!$movie) {
                throw new \Exception('Failed to Get Movie Details');
            }
            $repo = new MovieRepository();
            $repo->create($movie->toArray());
            sweetalert('Success to Add new Movie');
        } catch (\Throwable $th) {
            sweetalert('Failed to Add new Movie', 'error');
        }
    }

    // Pagination Setting
    public $perPage = 10; // jumlah movie per page

    #[Computed]
    public function getTotalPages(): int
    {
        return ceil($this->totalResults / $this->perPage);
    }

    public function prevPage()
    {
        if ($this->page > 1) {
            $this->page--;
            $this->getResults();
        }
    }

    public function nextPage()
    {
        if ($this->page < $this->getTotalPages()) {
            $this->page++;
            $this->getResults();
        }
    }

    public function gotoPage($page)
    {
        $this->page = $page;
        $this->getResults();
    }
};
?>
<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title h4">Search Movie On Internet</div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent='getResults'>
                        <div class="d-flex justify-content-between">
                            <div class="input-group">
                                <span class="input-group-text border-end-0 bg-white">
                                    <i class="ti ti-search" wire:loading.remove></i>
                                    <x-spinner />
                                </span>
                                <input
                                    class="form-control"
                                    type="text"
                                    aria-label="Search Movie"
                                    placeholder="Search Movie"
                                    wire:model='search'
                                >
                                <x-button type="submit">Search</x-button>
                            </div>
                        </div>
                        @error('search')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 mb-3 text-center">
            <h5 class="h2 mb-0">
                <span class="me-2">Total Movies:</span>
                <span class="badge bg-primary px-2">{{ $totalResults }}</span>
            </h5>
        </div>
        <div class="col-12">
            <div class="row g-3">
                {{-- Offile State --}}
                <div class="col-12" wire:offline>
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center"
                            style="min-height: 300px;"
                        >
                            <i class="ti ti-wifi-off text-danger mb-3" style="font-size: 5rem;"></i>
                            <p class="text-danger mb-1" style="font-size: 1.5rem;">Kamu sedang offline!</p>
                            <small class="text-danger" style="font-size: 1.2rem;">Periksa koneksi internet untuk mencari
                                film.</small>
                        </div>
                    </div>
                </div>
                <div class="col-12" wire:online>
                    <div class="row">
                        @if (count($results) > 0)
                            @foreach ($results as $movie)
                                <x-movie.search-card
                                    :title="$movie['Title']"
                                    :img="$movie['Poster'] !== 'N/A' ? $movie['Poster'] : 'https://via.placeholder.com/300x445?text=No+Image'"
                                    :year="$movie['Year']"
                                    :imdbID="$movie['imdbID']"
                                    onAdd="addMovie('{{ $movie['imdbID'] }}')"
                                />
                            @endforeach
                        @else
                            <div class="col-12">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center"
                                        style="min-height: 300px;"
                                    >
                                        <i class="ti ti-movie-off text-muted mb-3" style="font-size: 5rem"></i>
                                        <p class="text-muted mb-1" style="font-size: 1.5rem">Belum ada hasil pencarian.
                                        </p>
                                        <small class="text-muted" style="font-size: 1.5rem">Silakan masukkan kata kunci
                                            di
                                            atas
                                            untuk mencari
                                            film.</small>
                                    </div>
                                </div>
                            </div>

                        @endif
                    </div>
                </div>

            </div>
        </div>
        @if (count($results) > 0)
            <div class="col-12 mt-3">
                <nav aria-label="Movie pagination">
                    <ul class="pagination justify-content-center flex-wrap">
                        <!-- Previous -->
                        <li class="page-item {{ $page <= 1 ? 'disabled' : '' }}">
                            <button class="page-link d-flex align-items-center gap-2" wire:click="prevPage"
                                {{ $page <= 1 ? 'disabled' : '' }}
                            >
                                <span wire:loading.remove wire:target="prevPage">Previous</span>
                                <x-spinner wire:loading wire:target="prevPage" />
                            </button>
                        </li>

                        <!-- Page Numbers -->
                        @for ($i = 1; $i <= $this->getTotalPages(); $i++)
                            <li class="page-item {{ $i == $page ? 'active' : '' }}">
                                <button class="page-link d-flex align-items-center gap-2"
                                    wire:click="gotoPage({{ $i }})"
                                >
                                    <span wire:loading.remove
                                        wire:target="gotoPage({{ $i }})">{{ $i }}</span>
                                    <x-spinner wire:loading wire:target="gotoPage({{ $i }})" />
                                </button>
                            </li>
                        @endfor

                        <!-- Next -->
                        <li class="page-item {{ $page >= $this->getTotalPages() ? 'disabled' : '' }}">
                            <button class="page-link d-flex align-items-center gap-2" wire:click="nextPage"
                                {{ $page >= $this->getTotalPages() ? 'disabled' : '' }}
                            >
                                <span wire:loading.remove wire:target="nextPage">Next</span>
                                <x-spinner wire:loading wire:target="nextPage" />
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>

        @endif

    </div>
</div>
