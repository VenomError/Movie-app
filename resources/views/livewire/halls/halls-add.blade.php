<?php
use App\Models\Cinema;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\Cinema\AddHallForm;

new #[Layout('components.layouts.dashboard', ['title' => 'Add Hall'])] class extends Component {
    public AddHallForm $form;
    public $cinemas;
    public $cinema;

    public function mount(){
        $this->cinemas = Cinema::orderBy('name')->get(['id','name']);
    }

    public function submit()
    {
        if($this->form->addHall(Cinema::find($this->cinema))){
            $this->dispatch('reloadPage');
        }
    }
};
?>
<div>
    <form wire:submit.prevent='submit()'>
        <x-input type="text" label="Hall Name" wire:model='form.name' />
        <x-input.select label="Cinema" wire:model='cinema'>
            @foreach ($cinemas as $cinema )
                <option value="{{ $cinema->id }}" >{{ $cinema->name }}</option>
            @endforeach
        </x-input.select>
        <div class="d-flex justify-content-end">
            <x-button>Add Hall</x-button>
        </div>
    </form>
</div>
