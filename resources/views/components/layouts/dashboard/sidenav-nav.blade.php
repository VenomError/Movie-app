<x-side-nav-title title="Dashboard" icon="ti ti-layout-dashboard">
    <x-side-nav-item title="Dashboard" :href="route('dashboard')" />
</x-side-nav-title>

<x-side-nav-title title="Booking" icon="ti ti-layout-dashboard" icon="ti ti-ticket">
    <x-side-nav-item title="Booking" :href="route('dashboard')" />
</x-side-nav-title>

<x-side-nav-title title="User" icon="ti ti-layout-dashboard" icon="ti ti-users">
    <x-side-nav-item title="Customer" :href="route('dashboard.account.list', ['role' => 'costumer'])" />
    <x-side-nav-item title="Admin" :href="route('dashboard.account.list', ['role' => 'admin'])" />
</x-side-nav-title>

<x-side-nav-title title="Movies" icon="ti ti-layout-dashboard" icon="ti ti-movie">
    <x-side-nav-item title="Movies" :href="route('dashboard.movies.list')" />
    <x-side-nav-item title="Search Movie" :href="route('dashboard.movies.search')" />
    <x-side-nav-item title="Add Movie" :href="route('dashboard.movies.add')" />
</x-side-nav-title>

<x-side-nav-title title="Movies" icon="ti ti-layout-dashboard" icon="ti ti-device-tv">
    <x-side-nav-item title="Cinema" :href="route('dashboard.cinemas.list')" />
    <x-side-nav-item title="Add Cinema" :href="route('dashboard.cinemas.add')" />
    <x-side-nav-item title="Hall / Studio" :href="route('dashboard.halls.list')" />
    <x-side-nav-item title="Seat" :href="route('dashboard.seats.list')" />
    <x-side-nav-item title="Calendar" :href="route('dashboard')" />
</x-side-nav-title>