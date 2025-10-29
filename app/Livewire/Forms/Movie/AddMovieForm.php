<?php

namespace App\Livewire\Forms\Movie;

use Livewire\Form;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use App\Repository\MovieRepository;

class AddMovieForm extends Form
{
    use WithFileUploads;
    public $title;
    public $description;
    public $duration;
    public $genre;
    public $rating = 0;
    public $thumbnail;
    public $release_date;
    public $director;
    public $writer;
    public $actors;
    public $language = 'english';
    public $country;
    public $year = 2025;

    public array $images = [];

    public function rules(): array
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required|integer',
            'genre' => 'required',
            'director' => 'required',
            'writer' => 'required',
            'actors' => 'required',
            'language' => 'required',
            'country' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'release_date' => 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120'
        ];
    }

    public function addMovie()
    {
        $this->validate();

        try {
            return DB::transaction(function () {
                $movieRepo = new MovieRepository();
                if($this->thumbnail) {
                    $this->thumbnail = $this->thumbnail->store('movies', 'public');
                }
                $movie = $movieRepo->create($this->except('images'));
                collect($this->images)->each(function ($image) use ($movie, $movieRepo) {
                    $image = $image->store('movies', 'public');
                    $movieRepo->addImage($movie, $image);
                });
                $this->reset();
                sweetalert("Add Movie Success");
                return $movie;
            });
        } catch (\Throwable $th) {
            sweetalert()->error($th->getMessage());
            report($th);
            return false;
        }
    }

    public function addImage($image)
    {
        $images = collect($this->images);
        $images->push($image);
        $this->images = $images->toArray();
    }
}
