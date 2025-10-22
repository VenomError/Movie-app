<?php

namespace App\Repository;

use App\Models\Movie;
use App\Models\MovieImage;

class MovieRepository
{
    public function create(array $data)
    {
        $movie = new Movie($data);
        $movie->save();

        return $movie;
    }

    public function addImage(Movie $movie, $image): MovieImage
    {
        return $movie->images()->create(['image' => $image]);
    }

    public function removeImage(MovieImage $image): bool|null
    {
        return $image->forceDelete();
    }
}
