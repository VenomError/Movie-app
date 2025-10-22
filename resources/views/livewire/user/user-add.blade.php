<?php
use App\Enum\UserRole;
use Livewire\Volt\Component;
use App\Livewire\Forms\User\AddUserForm;

new class extends Component {
    public UserRole $role;
    public AddUserForm $form;

    public function submit()
    {
        if ($this->form->add($this->role)) {
            sweetalert("create {$this->role->value} Success");
            $this->dispatch('closeModal');
            $this->dispatch('reloadPage');
        }
    }
};
?>
<form wire:submit.prevent='submit()'>
    <x-input type="text" label="Full Name" wire:model.blur='form.name' />
    <x-input type="email" label="Email" wire:model.blur='form.email' />
    <x-input type="password" label="Password" wire:model.blur='form.password' />
    <x-input type="tel" label="Phone" wire:model.blur='form.phone' />

    <div class="d-flex float-end">
        <x-button>Submit</x-button>
    </div>
</form>
