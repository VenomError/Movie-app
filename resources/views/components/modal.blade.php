@props([
    'id' => 'modalID',
    'title' => '',
    'size' => 'lg',
    'class' => '',
    'onClose' => 'modalClosed',
])

<div
    class="modal fade"
    id="{{ $id }}"
    role="dialog"
    aria-labelledby="{{ $id }}Label"
    aria-hidden="true"
    tabindex="-1"
>
    <div class="modal-dialog modal-{{ $size }} {{ $class }}">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="{{ $id }}Label">{{ Str::title($title) }}</h4>
                <button
                    class="btn-close"
                    data-bs-dismiss="modal"
                    type="button"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('closeModal', () => {
                const modalEl = document.getElementById('{{ $id }}');
                const modal = bootstrap.Modal.getInstance(modalEl);
                if (modal) modal.hide();
            });
        });
    </script>
@endpush
