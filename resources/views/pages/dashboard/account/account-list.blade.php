<?php
use App\Models\User;
use App\Enum\UserRole;
use Livewire\Attributes\On;
use Livewire\Volt\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;

new #[Layout('components.layouts.dashboard', ['title' => 'Dashboard Admin'])] class extends Component {
    use WithPagination;
    public UserRole $role;
    public $count = 0;

    public function mount($role)
    {
        if (!$role) {
            abort(404);
        }
        $this->role = $role;
    }

    #[Computed]
    public function count()
    {
        return User::role($this->role)->count();
    }

    #[On('reloadPage')]
    public function render(): mixed
    {
        return parent::render();
    }
};
?>
<div class="row">
    <div class="col-xl-12">
        <x-widget.count title="Total {{ $role }}" icon="ti ti-users-group" :count="$this->count()" />
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between border-bottom border-light">
                <h4 class="header-title">List User Account</h4>
                <div>
                    @if ($role == UserRole::ADMIN)
                        <x-button.modal modal="modal-add-admin">Add Admin</x-button.modal>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <livewire:user.user-list :role="$role" />
            </div>
        </div>
    </div>
    <x-modal id="modal-add-admin" title="Tambah Account Admin">
        <livewire:user.user-add :role="$role" />
    </x-modal>
</div>
