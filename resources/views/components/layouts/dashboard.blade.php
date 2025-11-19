<!DOCTYPE html>
<html lang="en" data-layout="topnav" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <title>{{ $title ?? 'Movie APp' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <x-link href="assets/images/favicon.ico" rel="shortcut icon" />

    <!-- Theme Config Js -->
    <x-script src="assets/js/config.js"></x-script>

    <!-- Vendor css -->
    <x-link type="text/css" href="assets/css/vendor.min.css" rel="stylesheet" />

    <!-- App css -->
    <x-link id="app-style" type="text/css" href="assets/css/app.min.css" rel="stylesheet" />
    @stack('style')
    <!-- Icons css -->
    <x-link type="text/css" href="assets/css/icons.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- Topbar Start -->
        <x-layouts.dashboard.header />
        <!-- Topbar End -->
        <!-- Sidenav Menu Start -->
        <x-layouts.dashboard.sidenav />
        <!-- Sidenav Menu End -->

        <div class="page-content">

            <div class="page-container mt-3">
                {{ $pageTitle ?? '' }}
                {{ $slot }}
            </div>
            <!-- container -->

        </div>

    </div>
    <!-- END wrapper -->

    <x-layouts.dashboard.theme-setting />

    <!-- Vendor js -->
    <x-script src="assets/js/vendor.min.js"></x-script>

    @stack('script')

    <!-- App js -->
    <x-script src="assets/js/app.js"></x-script>

</body>

</html>