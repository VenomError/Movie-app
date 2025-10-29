<?php

namespace App\Repository;

use App\Models\Movie;
use App\Models\MovieImage;

class MovieRepository
{
    public function create(array $data): Movie
    {
        if (isset($data['imdb_id'])) {
            $existing = Movie::where('imdb_id', $data['imdb_id'])->first();
            if ($existing) {
                return $existing; // return existing movie
            }
        }

        return Movie::create($data);
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
