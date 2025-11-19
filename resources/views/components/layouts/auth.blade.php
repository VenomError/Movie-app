<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Log In </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- App favicon -->
        <x-link href="assets/images/favicon.ico" rel="shortcut icon" />

        <!-- Theme Config Js -->
        <x-script src="assets/js/config.js"></x-script>

        <!-- Vendor css -->
        <x-link type="text/css" href="assets/css/vendor.min.css" rel="stylesheet" />

        <!-- App css -->
        <x-link
            id="app-style"
            type="text/css"
            href="assets/css/app.min.css"
            rel="stylesheet"
        />

        <!-- Icons css -->
        <x-link type="text/css" href="assets/css/icons.min.css" rel="stylesheet" />
    </head>

    <body>

        <div class="auth-bg d-flex min-vh-100 justify-content-center align-items-center">
            <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="card h-100 p-xxl-4 mb-0 overflow-hidden p-3 text-center">
                        <a class="auth-brand mb-3" href="/">
                            <x-img
                                class="logo-dark"
                                src="assets/images/logo-dark.png"
                                alt="dark logo"
                                  height="100"
                            />
                            <x-img
                                class="logo-light"
                                src="assets/images/logo-dark.png"
                                alt="logo light"
                                height="100"
                            />
                        </a>
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Vendor js -->
        <x-script src="assets/js/vendor.min.js"></x-script>

        <!-- App js -->
        <x-script src="assets/js/app.js"></x-script>

    </body>

</html>
