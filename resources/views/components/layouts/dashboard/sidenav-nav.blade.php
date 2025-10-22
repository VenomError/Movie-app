<x-side-nav-title title="Dashboard" />
<x-side-nav-item title="Dashboard" :href="route('dashboard')" icon="ti ti-layout-board" />

<x-side-nav-title title="Account" />
<x-side-nav-item title="Costumer" :href="route('dashboard.account.list', ['role' => 'costumer'])" icon="ti ti-user-heart" />
<x-side-nav-item title="Admin" :href="route('dashboard.account.list', ['role' => 'admin'])" icon="ti ti-user-shield" />
