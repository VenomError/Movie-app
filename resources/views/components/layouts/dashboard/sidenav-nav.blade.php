<x-side-nav-title title="Dashboard" />
<x-side-nav-item title="Dashboard" :href="route('dashboard')" icon="ti ti-layout-dashboard" />

<x-side-nav-title title="Booking" />
<x-side-nav-item title="Booking" :href="route('dashboard')" icon="ti ti-ticket" />

<x-side-nav-title title="Account" />
<x-side-nav-item title="Customer" :href="route('dashboard.account.list', ['role' => 'costumer'])" icon="ti ti-users" />
<x-side-nav-item title="Admin" :href="route('dashboard.account.list', ['role' => 'admin'])" icon="ti ti-shield-lock" />

<x-side-nav-title title="Movies" />
<x-side-nav-item title="Movies" :href="route('dashboard.movies.list')" icon="ti ti-movie" />
<x-side-nav-item title="Search Movie" :href="route('dashboard.movies.search')" icon="ti ti-world" />
<x-side-nav-item title="Add Movie" :href="route('dashboard.movies.add')" icon="ti ti-square-plus" />

<x-side-nav-title title="Cinema" />
<x-side-nav-item title="Cinema" :href="route('dashboard.cinemas.list')" icon="ti ti-device-tv" />
<x-side-nav-item title="Add Cinema" :href="route('dashboard.cinemas.add')" icon="ti ti-square-plus" />
<x-side-nav-item title="Hall / Studio" :href="route('dashboard.halls.list')" icon="ti ti-screen-share" />
<x-side-nav-item title="Seat" :href="route('dashboard')" icon="ti ti-armchair" />
<x-side-nav-item title="Calendar" :href="route('dashboard')" icon="ti ti-calendar-event" />
