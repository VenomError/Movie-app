@props(['img' => 'https://placehold.co/230x300@3x?text=NOT+FOUND', 'title', 'year', 'imdbID', 'onAdd'])
@php
    if ($img == 'N/A') {
        $img = 'https://placehold.co/230x300@3x?text=NOT+FOUND';
    }
    $isExist = \App\Models\Movie::where('imdb_id', $imdbID)->exists();
@endphp
<div class="col-md-4 mb-3">
    <div class="card h-100">
        <!-- Poster -->
        <img class="card-img-top img-fluid" src="{{ $img }}" style="height: 445px;">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title text-center">{{ Str::title($title) }}</h5>
            <p class="card-text text-center">Tahun : {{ $year }}</p>
            @if ($isExist)
                <button class="btn btn-dark w-100 mt-auto" disabled>
                    Sudah di Tambahkan
                </button>
            @else
                <button
                    class="btn btn-primary w-100 mt-auto"
                    wire:click='{{ $onAdd }}'
                    wire:target='{{ $onAdd }}'
                    wire:loading.attr='disabled'
                >
                    <span wire:target='{{ $onAdd }}' wire:loading.remove>Add Movie</span>
                    <x-spinner
                        class="me-2"
                        color="white"
                        wire:target='{{ $onAdd }}'
                        wire:loading
                    />
                    <span wire:target='{{ $onAdd }}' wire:loading>
                        Loading...
                    </span>
                </button>
            @endif
        </div>
    </div>
</div>
