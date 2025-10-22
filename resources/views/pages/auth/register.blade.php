<?php
use Livewire\Volt\Component;
use App\Services\LoginService;
use Livewire\Attributes\Layout;
use App\Services\RegisterService;

new #[Layout('components.layouts.auth')] class extends Component {
    public $name;
    public $email;
    public $password;
    public $phone;

    public function loginSubmit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'phone' => 'required',
        ]);

        try {
            $service = new RegisterService($this->name, $this->email, $this->password, $this->phone);
            $this->reset();
            return $service->handle();
        } catch (\Throwable $th) {
            $this->addError('login', $th->getMessage());
        }
    }
};
?>
<div>

    <h3 class="fw-semibold mb-2">Register your account</h3>

    @error('login')
        <div class="alert alert-danger alert-dismissible d-flex align-items-center border-danger border-2" role="alert">
            <button
                class="btn-close"
                data-bs-dismiss="alert"
                type="button"
                aria-label="Close"
            ></button>
            <iconify-icon class="fs-20 me-1" icon="solar:danger-triangle-bold-duotone"></iconify-icon>
            <div class="lh-1"><strong>Register Failed - </strong> {{ $message }} </div>
        </div>
    @enderror
    <form class="mb-3 text-start" wire:submit.prevent='loginSubmit()'>
        <x-input type="text" label="Name" wire:model='name' />
        <x-input type="email" label="Email" wire:model='email' />
        <x-input type="password" label="Password" wire:model='password' />
        <x-input type="tel" label="Phone" wire:model='phone' />

        <div class="d-grid">
            <button class="btn btn-primary" type="submit">Register</button>
        </div>
    </form>

    <p class="text-danger fs-14 mb-4">Already Have Account? <a class="fw-semibold text-dark ms-1"
            href="{{ route('login') }}"
        >Sign In !</a></p>

</div>
