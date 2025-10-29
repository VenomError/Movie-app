<?php
use App\Models\Movie;
use App\Models\ShowTime;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;

new #[Layout('components.layouts.dashboard', ['title' => 'List Movies'])] class extends Component {
    public $totalMovie = 0;
    public $totalPenayangan = 0;
    public $totalBelumTayang = 0;
    public $totalSedangTayang = 0;
    public $totalSudahTayang = 0;

    public function render(): mixed
    {
        $this->totalMovie = Movie::count();
        $this->totalPenayangan = ShowTime::count();
        $this->totalBelumTayang = ShowTime::belumTayang()->count();
        $this->totalSedangTayang = ShowTime::sedangTayang()->count();
        $this->totalSudahTayang = ShowTime::sudahTayang()->count();

        return parent::render();
    }
};
?>
<div class="row">
    <div class="col-lg-6">
        <x-widget.count title="Total Movie" icon="ti ti-movie" :count="$totalMovie" />
    </div>
    <div class="col-lg-6">
        <x-widget.count title="Total Penayangan" icon="ti ti-device-tv" :count="$totalPenayangan" />
    </div>
    <div class="col-lg-4">
        <x-widget.count
            title="Belum Tayang"
            color="primary"
            icon="ti ti-movie"
            :count="$totalBelumTayang"
        />
    </div>
    <div class="col-lg-4">
        <x-widget.count
            title="Sedang Tayang"
            color="success"
            icon="ti ti-movie"
            :count="$totalSedangTayang"
        />
    </div>
    <div class="col-lg-4">
        <x-widget.count
            title="Sudah Tayang"
            color="danger"
            icon="ti ti-movie"
            :count="$totalSudahTayang"
        />
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between border-bottom border-light">
                <h4 class="header-title">List Movies</h4>
                <div>
                    <a class="btn btn-primary" href="{{ route('dashboard.movies.add') }}">Add Movie</a>
                    <a class="btn btn-primary" href="{{ route('dashboard.movies.search') }}">Search Movie</a>
                </div>
            </div>
            <div class="card-body">
                <livewire:movies.movies-list />
            </div>
        </div>
    </div>

</div>
