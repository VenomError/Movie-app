<?php
use Livewire\Volt\Component;
new #[Layout('components.layouts.auth')] class extends Component {};
?>
<div>

    <h3 class="fw-semibold mb-2">Login your account</h3>

    <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>

    <div class="d-flex justify-content-center mb-3 gap-2">
        <a class="btn btn-soft-danger avatar-lg" href="#!"><i class="ti ti-brand-google-filled fs-24"></i></a>
        <a class="btn btn-soft-success avatar-lg" href="#!"><i class="ti ti-brand-apple fs-24"></i></a>
        <a class="btn btn-soft-primary avatar-lg" href="#!"><i class="ti ti-brand-facebook fs-24"></i></a>
        <a class="btn btn-soft-info avatar-lg" href="#!"><i class="ti ti-brand-linkedin fs-24"></i></a>
    </div>

    <p class="fs-13 fw-semibold">Or Login With Email</p>

    <form class="mb-3 text-start" action="https://coderthemes.com/osen/layouts/index.html">
        <div class="mb-3">
            <label class="form-label" for="example-email">Email</label>
            <input
                class="form-control"
                id="example-email"
                name="example-email"
                type="email"
                placeholder="Enter your email"
            >
        </div>

        <div class="mb-3">
            <label class="form-label" for="example-password">Password</label>
            <input
                class="form-control"
                id="example-password"
                type="password"
                placeholder="Enter your password"
            >
        </div>

        <div class="d-flex justify-content-between mb-3">
            <div class="form-check">
                <input class="form-check-input" id="checkbox-signin" type="checkbox">
                <label class="form-check-label" for="checkbox-signin">Remember me</label>
            </div>

            <a class="text-muted border-bottom border-dashed" href="auth-recoverpw.html">Forget
                Password</a>
        </div>

        <div class="d-grid">
            <button class="btn btn-primary" type="submit">Login</button>
        </div>
    </form>

    <p class="text-danger fs-14 mb-4">Don't have an account? <a class="fw-semibold text-dark ms-1"
            href="auth-register.html"
        >Sign Up !</a></p>

</div>
