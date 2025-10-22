<?php
use Livewire\Volt\Component;
use App\Services\LoginService;
use Livewire\Attributes\Layout;

new #[Layout('components.layouts.auth')] class extends Component {
    public $email;
    public $password;
    public $remember = true;

    public function loginSubmit()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try {
            $service = new LoginService($this->email, $this->password, $this->remember);
            $this->reset();
            return $service->handle();
        } catch (\Throwable $th) {
            $this->addError('login', $th->getMessage());
        }
    }
};
?>
<div>

    <h3 class="fw-semibold mb-2">Login your account</h3>

    <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
    @error('login')
        <div class="alert alert-danger alert-dismissible d-flex align-items-center border-danger border-2" role="alert">
            <button
                class="btn-close"
                data-bs-dismiss="alert"
                type="button"
                aria-label="Close"
            ></button>
            <iconify-icon class="fs-20 me-1" icon="solar:danger-triangle-bold-duotone"></iconify-icon>
            <div class="lh-1"><strong>Login Failed - </strong> {{ $message }} </div>
        </div>
    @enderror
    <form class="mb-3 text-start" wire:submit.prevent='loginSubmit()'>
        <x-input type="email" label="Email" wire:model='email' />
        <x-input type="password" label="Password" wire:model='password' />

        <div class="d-flex justify-content-between mb-3">
            <div class="form-check">
                <input
                    class="form-check-input"
                    id="checkbox-signin"
                    type="checkbox"
                    wire:model='remember'
                >
                <label class="form-check-label" for="checkbox-signin">Remember me</label>
            </div>

        </div>

        <div class="d-grid">
            <button class="btn btn-primary" type="submit">Login</button>
        </div>
    </form>

    <p class="text-danger fs-14 mb-4">Don't have an account? <a class="fw-semibold text-dark ms-1"
            href="{{ route('register') }}"
        >Sign Up !</a></p>

</div>
