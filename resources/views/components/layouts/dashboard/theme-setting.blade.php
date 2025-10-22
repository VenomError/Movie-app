<!-- Theme Settings -->
<div class="offcanvas offcanvas-end" id="theme-settings-offcanvas" tabindex="-1">
    <div class="d-flex align-items-center offcanvas-header border-bottom gap-2 border-dashed px-3 py-3">
        <h5 class="flex-grow-1 mb-0">Theme Settings</h5>

        <button
            class="btn-close"
            data-bs-dismiss="offcanvas"
            type="button"
            aria-label="Close"
        ></button>
    </div>

    <div class="offcanvas-body h-100 p-0" data-simplebar>
        <div class="border-bottom border-dashed p-3">
            <h5 class="fs-16 fw-bold mb-3">Color Scheme</h5>

            <div class="row">
                <div class="col-4">
                    <div class="form-check card-radio">
                        <input
                            class="form-check-input"
                            id="layout-color-light"
                            name="data-bs-theme"
                            type="radio"
                            value="light"
                        >
                        <label class="form-check-label w-100 d-flex justify-content-center align-items-center p-3"
                            for="layout-color-light"
                        >
                            <iconify-icon class="fs-32 text-muted" icon="solar:sun-bold-duotone"></iconify-icon>
                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Light</h5>
                </div>

                <div class="col-4">
                    <div class="form-check card-radio">
                        <input
                            class="form-check-input"
                            id="layout-color-dark"
                            name="data-bs-theme"
                            type="radio"
                            value="dark"
                        >
                        <label class="form-check-label w-100 d-flex justify-content-center align-items-center p-3"
                            for="layout-color-dark"
                        >
                            <iconify-icon class="fs-32 text-muted" icon="solar:cloud-sun-2-bold-duotone"></iconify-icon>
                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Dark</h5>
                </div>
            </div>
        </div>

        <div class="border-bottom border-dashed p-3">
            <h5 class="fs-16 fw-bold mb-3">Layout Mode</h5>

            <div class="row">
                <div class="col-4">
                    <div class="form-check card-radio">
                        <input
                            class="form-check-input"
                            id="layout-mode-fluid"
                            name="data-layout-mode"
                            type="radio"
                            value="fluid"
                        >
                        <label class="form-check-label avatar-xl w-100 p-0" for="layout-mode-fluid">
                            <div>
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                            <span class="d-block bg-dark-subtle mb-1 rounded p-1"></span>
                                            <span
                                                class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                            ></span>
                                            <span
                                                class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                            ></span>
                                            <span
                                                class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                            ></span>
                                            <span
                                                class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                            ></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column rounded-2">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div>
                                <span class="d-flex h-100 flex-column">
                                    <span
                                        class="bg-light d-flex align-items-center border-bottom border-secondary border-opacity-25 p-1"
                                    >
                                        <span class="d-block bg-dark-subtle me-1 rounded p-1"></span>
                                        <span
                                            class="d-block border-secondary ms-auto rounded border border-opacity-25"></span>
                                        <span
                                            class="d-block border-secondary ms-1 rounded border border-opacity-25"></span>
                                        <span
                                            class="d-block border-secondary ms-1 rounded border border-opacity-25"></span>
                                        <span
                                            class="d-block border-secondary ms-1 rounded border border-opacity-25"></span>
                                    </span>
                                    <span class="bg-light d-block p-1"></span>
                                </span>
                            </div>
                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Fluid</h5>
                </div>

                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input
                            class="form-check-input"
                            id="data-layout-detached"
                            name="data-layout-mode"
                            type="radio"
                            value="detached"
                        >
                        <label class="form-check-label avatar-xl w-100 p-0" for="data-layout-detached">
                            <span class="d-flex h-100 flex-column">
                                <span class="bg-light d-flex align-items-center border-bottom p-1">
                                    <span class="d-block bg-dark-subtle me-1 rounded p-1"></span>
                                    <span
                                        class="d-block border-secondary ms-auto rounded border border-opacity-25"></span>
                                    <span class="d-block border-secondary ms-1 rounded border border-opacity-25"></span>
                                    <span class="d-block border-secondary ms-1 rounded border border-opacity-25"></span>
                                    <span class="d-block border-secondary ms-1 rounded border border-opacity-25"></span>
                                </span>
                                <span class="d-flex h-100 p-1 px-2">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 flex-column p-1 px-2">
                                            <span
                                                class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                            ></span>
                                            <span
                                                class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                            ></span>
                                            <span
                                                class="d-block border-secondary w-100 rounded border border-opacity-25"
                                            ></span>
                                        </span>
                                    </span>
                                </span>
                                <span class="bg-light d-block mt-auto p-1 px-2"></span>
                            </span>

                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Detached</h5>
                </div>
            </div>
        </div>

        <div class="border-bottom border-dashed p-3">
            <h5 class="fs-16 fw-bold mb-3">Topbar Color</h5>

            <div class="row">
                <div class="col-3">
                    <div class="form-check card-radio">
                        <input
                            class="form-check-input"
                            id="topbar-color-light"
                            name="data-topbar-color"
                            type="radio"
                            value="light"
                        >
                        <label class="form-check-label avatar-lg w-100 bg-light p-0" for="topbar-color-light">
                            <span class="d-flex align-items-center justify-content-center h-100">
                                <span class="d-inline-flex rounded-circle bg-white p-2 shadow"></span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Light</h5>
                </div>

                <div class="col-3">
                    <div class="form-check card-radio">
                        <input
                            class="form-check-input"
                            id="topbar-color-dark"
                            name="data-topbar-color"
                            type="radio"
                            value="dark"
                        >
                        <label class="form-check-label avatar-lg w-100 bg-light p-0" for="topbar-color-dark">
                            <span class="d-flex align-items-center justify-content-center h-100">
                                <span class="d-inline-flex rounded-circle bg-dark p-2 shadow"></span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Dark</h5>
                </div>

                <div class="col-3">
                    <div class="form-check card-radio">
                        <input
                            class="form-check-input"
                            id="topbar-color-brand"
                            name="data-topbar-color"
                            type="radio"
                            value="brand"
                        >
                        <label class="form-check-label avatar-lg w-100 bg-light p-0" for="topbar-color-brand">
                            <span class="d-flex align-items-center justify-content-center h-100">
                                <span class="d-inline-flex rounded-circle bg-primary p-2 shadow"></span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Gradient</h5>
                </div>
            </div>
        </div>

        <div class="border-bottom border-dashed p-3">
            <h5 class="fs-16 fw-bold mb-3">Menu Color</h5>

            <div class="row">
                <div class="col-3">
                    <div class="form-check sidebar-setting card-radio">
                        <input
                            class="form-check-input"
                            id="sidenav-color-light"
                            name="data-menu-color"
                            type="radio"
                            value="light"
                        >
                        <label class="form-check-label avatar-lg w-100 bg-light p-0" for="sidenav-color-light">
                            <span class="d-flex align-items-center justify-content-center h-100">
                                <span class="d-inline-flex rounded-circle bg-white p-2 shadow"></span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Light</h5>
                </div>

                <div class="col-3" style="--ct-dark-rgb: 64,73,84;">
                    <div class="form-check sidebar-setting card-radio">
                        <input
                            class="form-check-input"
                            id="sidenav-color-dark"
                            name="data-menu-color"
                            type="radio"
                            value="dark"
                        >
                        <label class="form-check-label avatar-lg w-100 bg-light p-0" for="sidenav-color-dark">
                            <span class="d-flex align-items-center justify-content-center h-100">
                                <span class="d-inline-flex rounded-circle bg-dark p-2 shadow"></span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Dark</h5>
                </div>
                <div class="col-3">
                    <div class="form-check sidebar-setting card-radio">
                        <input
                            class="form-check-input"
                            id="sidenav-color-brand"
                            name="data-menu-color"
                            type="radio"
                            value="brand"
                        >
                        <label class="form-check-label avatar-lg w-100 bg-light p-0" for="sidenav-color-brand">
                            <span class="d-flex align-items-center justify-content-center h-100">
                                <span class="d-inline-flex rounded-circle bg-primary p-2 shadow"></span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Brand</h5>
                </div>
            </div>
        </div>

        <div class=".border-bottom .border-dashed p-3">
            <h5 class="fs-16 fw-bold mb-3">Sidebar Size</h5>

            <div class="row">
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input
                            class="form-check-input"
                            id="sidenav-size-default"
                            name="data-sidenav-size"
                            type="radio"
                            value="default"
                        >
                        <label class="form-check-label avatar-xl w-100 p-0" for="sidenav-size-default">
                            <span class="d-flex h-100">
                                <span class="flex-shrink-0">
                                    <span class="bg-light d-flex h-100 border-end flex-column p-1 px-2">
                                        <span class="d-block bg-dark-subtle mb-1 rounded p-1"></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Default</h5>
                </div>

                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input
                            class="form-check-input"
                            id="sidenav-size-compact"
                            name="data-sidenav-size"
                            type="radio"
                            value="compact"
                        >
                        <label class="form-check-label avatar-xl w-100 p-0" for="sidenav-size-compact">
                            <span class="d-flex h-100">
                                <span class="flex-shrink-0">
                                    <span class="bg-light d-flex h-100 border-end flex-column p-1">
                                        <span class="d-block bg-dark-subtle mb-1 rounded p-1"></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Compact</h5>
                </div>

                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input
                            class="form-check-input"
                            id="sidenav-size-small"
                            name="data-sidenav-size"
                            type="radio"
                            value="condensed"
                        >
                        <label class="form-check-label avatar-xl w-100 p-0" for="sidenav-size-small">
                            <span class="d-flex h-100">
                                <span class="flex-shrink-0">
                                    <span class="bg-light d-flex h-100 border-end flex-column" style="padding: 2px;">
                                        <span class="d-block bg-dark-subtle mb-1 rounded p-1"></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Condensed</h5>
                </div>

                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input
                            class="form-check-input"
                            id="sidenav-size-small-hover"
                            name="data-sidenav-size"
                            type="radio"
                            value="sm-hover"
                        >
                        <label class="form-check-label avatar-xl w-100 p-0" for="sidenav-size-small-hover">
                            <span class="d-flex h-100">
                                <span class="flex-shrink-0">
                                    <span class="bg-light d-flex h-100 border-end flex-column" style="padding: 2px;">
                                        <span class="d-block bg-dark-subtle mb-1 rounded p-1"></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                        <span
                                            class="d-block border-secondary w-100 mb-1 rounded border border-opacity-25"
                                        ></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Hover View</h5>
                </div>

                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input
                            class="form-check-input"
                            id="sidenav-size-full"
                            name="data-sidenav-size"
                            type="radio"
                            value="full"
                        >
                        <label class="form-check-label avatar-xl w-100 p-0" for="sidenav-size-full">
                            <span class="d-flex h-100">
                                <span class="flex-shrink-0">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="d-block bg-dark-subtle mb-1 p-1"></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Full Layout</h5>
                </div>

                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input
                            class="form-check-input"
                            id="sidenav-size-fullscreen"
                            name="data-sidenav-size"
                            type="radio"
                            value="fullscreen"
                        >
                        <label class="form-check-label avatar-xl w-100 p-0" for="sidenav-size-fullscreen">
                            <span class="d-flex h-100">
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-muted mt-2 text-center">Hidden</h5>
                </div>
            </div>
        </div>

        <div class="border-bottom d-none border-dashed p-3">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="fs-16 fw-bold mb-0">Container Width</h5>

                <div class="btn-group radio" role="group">
                    <input
                        class="btn-check"
                        id="container-width-fixed"
                        name="data-container-position"
                        type="radio"
                        value="fixed"
                    >
                    <label class="btn btn-sm btn-soft-primary w-sm" for="container-width-fixed">Full</label>

                    <input
                        class="btn-check"
                        id="container-width-scrollable"
                        name="data-container-position"
                        type="radio"
                        value="scrollable"
                    >
                    <label class="btn btn-sm btn-soft-primary w-sm ms-0"
                        for="container-width-scrollable">Boxed</label>
                </div>
            </div>
        </div>

        <div class="border-bottom d-none border-dashed p-3">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="fs-16 fw-bold mb-0">Layout Position</h5>

                <div class="btn-group radio" role="group">
                    <input
                        class="btn-check"
                        id="layout-position-fixed"
                        name="data-layout-position"
                        type="radio"
                        value="fixed"
                    >
                    <label class="btn btn-sm btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                    <input
                        class="btn-check"
                        id="layout-position-scrollable"
                        name="data-layout-position"
                        type="radio"
                        value="scrollable"
                    >
                    <label class="btn btn-sm btn-soft-primary w-sm ms-0"
                        for="layout-position-scrollable">Scrollable</label>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex align-items-center offcanvas-header border-top gap-2 border-dashed px-3 py-2">
        <button class="btn w-50 btn-soft-danger" id="reset-layout" type="button">Reset</button>
    </div>

</div>
