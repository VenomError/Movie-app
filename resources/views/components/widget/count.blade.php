@props(['title', 'icon' => '', 'count' => 0])
<div class="card">
    <div class="card-body">
        <h5 class="text-muted fs-13 text-uppercase" title="{{ $title }}">{{ $title }}</h5>
        <div class="d-flex align-items-center mt-2 gap-2">
            <div class="avatar-md flex-shrink-0">
                <span class="avatar-title bg-primary-subtle text-primary fs-22 rounded">
                    <i class="{{ $icon }}"></i>
                </span>
            </div>
            <h3 class="fw-bold mb-0">{{ $count }}</h3>
        </div>
    </div>
</div>
