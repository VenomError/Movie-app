@props([
    'title' => 'Title',
    'icon' => 'ti ti-dashboard'
])

<li class="nav-item dropdown hover-dropdown">
    <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-dashboards" data-bs-toggle="dropdown"
        role="button" aria-haspopup="true" aria-expanded="false">
        <span class="menu-icon"><i class="{{ $icon }}"></i></span>
        <span class="menu-text"> {{ $title }} </span>
        <div class="menu-arrow"></div>
    </a>
    <div class="dropdown-menu" aria-labelledby="topnav-dashboards">
        {{ $slot }}
    </div>
</li>