<header class="app-topbar">
    <div class="page-container topbar-menu">
        <div class="d-flex align-items-center gap-2">

            <!-- Brand Logo -->
            <a class="logo" href="index.html">
                <span class="logo-light">
                    <span class="logo-lg"><x-img src="assets/images/logo.png" alt="logo" /></span>
                    <span class="logo-sm"><x-img src="assets/images/logo-sm.png" alt="small logo" /></span>
                </span>

                <span class="logo-dark">
                    <span class="logo-lg"><x-img src="assets/images/logo-dark.png" alt="dark logo" /></span>
                    <span class="logo-sm"><x-img src="assets/images/logo-sm.png" alt="small logo" /></span>
                </span>
            </a>

            <!-- Sidebar Menu Toggle Button -->
            <button class="sidenav-toggle-button px-2">
                <i class="ti ti-menu-deep fs-24"></i>
            </button>

            <!-- Horizontal Menu Toggle Button -->
            <button class="topnav-toggle-button px-2" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="ti ti-menu-deep fs-22"></i>
            </button>
        </div>

        <div class="d-flex align-items-center gap-2">

            <!-- Button Trigger Customizer Offcanvas -->
            <div class="topbar-item d-none d-sm-flex">
                <button
                    class="topbar-link"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#theme-settings-offcanvas"
                    type="button"
                >
                    <i class="ti ti-settings fs-22"></i>
                </button>
            </div>

            <!-- Light/Dark Mode Button -->
            <div class="topbar-item d-none d-sm-flex">
                <button class="topbar-link" id="light-dark-mode" type="button">
                    <i class="ti ti-moon fs-22"></i>
                </button>
            </div>

            <!-- User Dropdown -->
            <div class="topbar-item nav-user">
                <div class="dropdown">
                    <a
                        class="topbar-link dropdown-toggle drop-arrow-none px-2"
                        data-bs-toggle="dropdown"
                        data-bs-offset="0,19"
                        type="button"
                        aria-haspopup="false"
                        aria-expanded="false"
                    >
                        <img
                            class="rounded-circle me-lg-2 d-flex"
                            src="assets/images/users/avatar-1.jpg"
                            alt="user-image"
                            width="32"
                        >
                        <span class="d-lg-flex flex-column d-none gap-1">
                            <h5 class="my-0">Dhanoo K.</h5>
                            <h6 class="fw-normal my-0">Admin</h6>
                        </span>
                        <i class="ti ti-chevron-down d-none d-lg-block ms-2 align-middle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome Admin!</h6>
                        </div>

                        <!-- item-->
                        <a class="dropdown-item" href="javascript:void(0);">
                            <i class="ti ti-user-hexagon fs-17 me-1 align-middle"></i>
                            <span class="align-middle">My Account</span>
                        </a>

                        <!-- item-->
                        <a class="dropdown-item" href="javascript:void(0);">
                            <i class="ti ti-settings fs-17 me-1 align-middle"></i>
                            <span class="align-middle">Settings</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a class="dropdown-item active fw-semibold text-danger" href="/logout">
                            <i class="ti ti-logout fs-17 me-1 align-middle"></i>
                            <span class="align-middle">Sign Out</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
