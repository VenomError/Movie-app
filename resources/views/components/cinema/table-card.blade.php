@props(['cinema'])
<div class="d-flex align-items-center">
    <div class="avatar-md me-2 flex-shrink-0">
        <img
            class="avatar-title bg-primary-subtle rounded-circle"
            src="{{ imgUrl($cinema->thumbnail) }}"
            alt=""
            height="22"
        >
    </div>
    <div>
        <h5 class="fs-14 mt-1">{{ $cinema->name }}</h5>
        <span class="text-muted fs-12">{{ $cinema->city }}</span> <br>
    </div>
</div>
