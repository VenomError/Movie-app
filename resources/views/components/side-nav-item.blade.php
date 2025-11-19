@props(['href' => '/', 'icon' => 'ti ti-dashboard', 'title' => 'Dashboard'])

<a class="dropdown-item" href="{{ $href }}">
    <span class="menu-text"> {{ Str::title($title) }} </span>
</a>
