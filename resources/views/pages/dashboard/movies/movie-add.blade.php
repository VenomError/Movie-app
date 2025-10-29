<?php
use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\Movie\AddMovieForm;

new #[Layout('components.layouts.dashboard', ['title' => 'Add Movies'])] class extends Component {
    use WithFileUploads;
    public AddMovieForm $form;

    public $image;

    public function addImage()
    {
        $this->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $this->form->addImage($this->image);
        $this->reset('image');
    }

    public function addMovie()
    {
        if ($this->form->addMovie()) {
            $this->dispatch('reloadPage');
        }
    }
};
?>
<div>
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title h4">Add Movie</div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent='addMovie()'>
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
                        <x-input.file wire:model.blur='form.thumbnail' label="Movie Thumbnail" />
                        <x-input type="text" wire:model.blur='form.title' label="Title" />
                        <x-input.textarea rows="8" wire:model.blur='form.description' label="Description" />
                        <x-input type="number" wire:model.blur='form.duration' label="Duration (minutes)" />
                        <x-input type="text" wire:model.blur='form.genre' label="Genre" />
                        <x-input type="number" wire:model.blur='form.year' label="year" />
                        <x-input type="date" wire:model.blur='form.release_date' label="Relesate Date" />
                        <x-input type="text" wire:model.blur='form.director' label="director" >
                            Gunakan tanda (,) jika lebih dari satu
                        </x-input>
                        <x-input type="text" wire:model.blur='form.writer' label="writer" >
                            Gunakan tanda (,) jika lebih dari satu
                        </x-input>
                        <x-input type="text" wire:model.blur='form.actors' label="actors" >
                            Gunakan tanda (,) jika lebih dari satu
                        </x-input>
                        <x-input type="text" wire:model.blur='form.language' label="language" />
                        <x-input type="text" wire:model.blur='form.country' label="country" />
                        <div class="d-flex float-end">
                            <x-button>Add Movie</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel">
                            {{-- Indicators --}}
                            @if (count($form->images) > 1)
                                <div class="carousel-indicators">
                                    @foreach ($form->images as $index => $img)
                                        <button
                                            class="{{ $index === 0 ? 'active' : '' }}"
                                            data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="{{ $index }}"
                                            type="button"
                                            aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                                            aria-label="Slide {{ $index + 1 }}"
                                        >
                                        </button>
                                    @endforeach
                                </div>
                            @endif

                            {{-- Carousel Items --}}
                            <div class="carousel-inner">
                                @forelse ($form->images as $index => $img)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        @if ($img instanceof \Livewire\Features\SupportFileUploads\TemporaryUploadedFile)
                                            <img
                                                class="d-block w-100 rounded"
                                                src="{{ $img->temporaryUrl() }}"
                                                alt="Slide {{ $index + 1 }}"
                                                style="max-width: 200px ; max-height: 200px;"
                                            >
                                        @else
                                            <img
                                                class="d-block w-100 rounded"
                                                src="{{ asset('storage/' . $img) }}"
                                                alt="Slide {{ $index + 1 }}"
                                                style="max-width: 200px ; max-height: 200px;"
                                            >
                                        @endif
                                    </div>
                                @empty
                                    <div class="carousel-item active">
                                        <img
                                            class="d-block img-fl w-100 rounded"
                                            src="https://placehold.co/400x400/png?text=No+Image"
                                            alt="No Image"
                                            style="max-width: 200px ; max-height: 200px;"
                                        >
                                    </div>
                                @endforelse
                            </div>

                            {{-- Controls --}}
                            @if (count($form->images) > 1)
                                <button
                                    class="carousel-control-prev"
                                    data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide="prev"
                                    type="button"
                                >
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </button>
                                <button
                                    class="carousel-control-next"
                                    data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide="next"
                                    type="button"
                                >
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </button>
                            @endif
                        </div>
                    </div>
                    <div class="mt-2">
                        <x-input.file wire:model='image' label="Upload Movie Image" />
                    </div>
                    <div class="text-end">
                        <x-button class="float-end" type="button" wire:click='addImage()'>Add Image</x-button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
