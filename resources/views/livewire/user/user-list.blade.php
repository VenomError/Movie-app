<?php
use App\Models\User;
use App\Enum\UserRole;
use Livewire\Volt\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Reactive;

new class extends Component {
    use WithPagination;
    #[Reactive]
    public UserRole $role;

    #[Computed]
    public function users()
    {
        return User::role($this->role)->paginate();
    }
};
?>
<x-table>
    <x-slot:head>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
        </tr>
    </x-slot:head>
    <x-slot:body>
        @forelse ($this->users() as $user)
            <tr>
                <td>{{ $this->users()->firstItem() + $loop->index }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">
                    <div class="d-flex flex-column align-items-center justify-content-center text-muted py-5">
                        <i class="ti ti-user-off" style="font-size: 3rem;"></i>
                        <div class="fw-semibold mt-2">Tidak ada data pengguna</div>
                        <small>Tambahkan data pengguna terlebih dahulu</small>
                    </div>
                </td>
            </tr>
        @endforelse
    </x-slot:body>
    <x-slot:footer>
        {{ $this->users()->links() }}
    </x-slot:footer>
</x-table>
