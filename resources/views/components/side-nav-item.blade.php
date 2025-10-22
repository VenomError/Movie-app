@props(['href' => '/', 'icon' => 'ti ti-dashboard', 'title' => 'Dashboard'])
<li class="side-nav-item">
    <a class="side-nav-link" href="{{ $href }}">
        <span class="menu-icon"><i class="{{ $icon }}"></i></span>
        <span class="menu-text"> {{ Str::title($title) }} </span>
    </a>
</li>
