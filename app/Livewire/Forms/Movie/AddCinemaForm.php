<?php

namespace App\Livewire\Forms\Movie;

use App\Repository\CinemaRepository;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class AddCinemaForm extends Form
{
    use WithFileUploads;
    public $name;
    public $city;
    public $address = '';
    public $latitude = '';
    public $longitude = '';
    public $thumbnail = null;

    public function rules()
    {
        return [
            'name' => 'required',
            'city' => 'required',
            'address' => 'nullable',
            'latitude' => 'nullable',
            'longitude' => 'nullable',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ];
    }

    public function addCinema()
    {
        $this->validate();
        try {
            $cinemaRepo = new CinemaRepository();
            if ($this->thumbnail) {
                $this->thumbnail = $this->thumbnail->store('cinema', 'public');
            }
            $cinema = $cinemaRepo->create($this->all());
            sweetalert("Create Cinema Success");
            $this->reset();
            return $cinema;
        } catch (\Throwable $th) {
            sweetalert()->error($th->getMessage());
            report($th);
            return false;
        }
    }
}
