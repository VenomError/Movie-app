<?php
use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\Movie\AddCinemaForm;

new #[Layout('components.layouts.dashboard', ['title' => 'Add Cinemas'])] class extends Component {
    use WithFileUploads;
    public AddCinemaForm $form;

    public function submit()
    {
        if ($this->form->addCinema()) {
        }
    }
};
?>
<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add Cinema</div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent='submit()'>
                        <div class="d-flex justify-content-center mb-2 text-center">
                            @if ($form->thumbnail instanceof \Livewire\Features\SupportFileUploads\TemporaryUploadedFile)
                                {{-- Preview saat baru upload --}}
                                <img
                                    class="img-fluid rounded shadow-sm"
                                    src="{{ $form->thumbnail->temporaryUrl() }}"
                                    alt="Preview Thumbnail"
                                    width="400"
                                    height="400"
                                >
                            @elseif(!empty($form->thumbnail))
                                {{-- Thumbnail lama dari storage --}}
                                <img
                                    class="img-fluid rounded shadow-sm"
                                    src="{{ asset('storage/' . $form->thumbnail) }}"
                                    alt="Current Thumbnail"
                                    width="400"
                                    height="400"
                                >
                            @else
                                {{-- Placeholder jika belum ada thumbnail --}}
                                <img
                                    class="img-fluid rounded shadow-sm"
                                    src="https://placehold.co/400x400/png?text=NO+THUMBNAIL"
                                    alt="Placeholder"
                                    style="max-width: 200px ; max-height: 200px;"
                                >
                            @endif
                        </div>
                        <x-input.file wire:model.blur='form.thumbnail' label="Cinema Thumbnail" />
                        <x-input type="text" wire:model.blur='form.name' label="name" />
                        <x-input type="text" wire:model.blur='form.city' label="city" />
                        <x-input type="text" wire:model.blur='form.address' label="address" />
                        <x-input type="text" wire:model.blur='form.latitude' label="latitude" />
                        <x-input type="text" wire:model.blur='form.longitude' label="longitude" />

                        <div class="d-flex float-end">
                            <x-button>Add Cinema</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
