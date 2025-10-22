@props(['movie'])
<div class="d-flex align-items-center">
    <div class="avatar-md me-2 flex-shrink-0">
        <img
            class="avatar-title bg-primary-subtle rounded-circle"
            src="{{ $movie->thumbnail }}"
            alt=""
            height="22"
        >
    </div>
    <div>
        <h5 class="fs-14 mt-1">{{ $movie->title }}</h5>
        <span class="text-muted fs-12">{{ $movie->genre }}</span> <br>
    </div>
</div>
