<x-side-nav-title title="Dashboard" />
<x-side-nav-item title="Dashboard" :href="route('dashboard')" icon="ti ti-layout-board" />

<x-side-nav-title title="Account" />
<x-side-nav-item title="Costumer" :href="route('dashboard.account.list', ['role' => 'costumer'])" icon="ti ti-user-heart" />
<x-side-nav-item title="Admin" :href="route('dashboard.account.list', ['role' => 'admin'])" icon="ti ti-user-shield" />

<x-side-nav-title title="Movies" />
<x-side-nav-item title="Movies" :href="route('dashboard.movies.list')" icon="ti ti-movie" />
<x-side-nav-item title="Add Movie" :href="route('dashboard.movies.add')" icon="ti ti-plus" />
