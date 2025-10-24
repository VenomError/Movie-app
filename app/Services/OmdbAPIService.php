<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class OmdbAPIService
{
    private string $apiKey;
    private string $baseUrl;
    private string $baseImgUrl;

    public function __construct()
    {
        $this->apiKey = config('omdb.api_key');
        $this->baseUrl = config('omdb.base_url');
        $this->baseImgUrl = config('omdb.base_img_url', 'https://img.omdbapi.com/');
    }

    public function search(string $s, int $page = 1, array $options = ['type' => 'movie']): Collection
    {
        $cacheKey = "omdb_search_" . md5($s . "_page_" . $page . serialize($options));

        return Cache::remember($cacheKey, now()->addHours(12), function () use ($s, $page, $options) {
            $params = array_merge([
                'apikey' => $this->apiKey,
                's' => $s,
                'page' => $page,
            ], $options);

            $response = Http::get($this->baseUrl, $params);
            $data = $response->json();

            $movies = collect($data['Search'] ?? [])->map(fn($d) => collect($d));

            return collect([
                'totalResults' => $data['totalResults'] ?? 0,
                'movies' => $movies
            ]);
        });
    }

    public function findById(string $id, array $options = []): Collection
    {
        $cacheKey = "omdb_movie_" . $id;

        return Cache::remember($cacheKey, now()->addHours(24), function () use ($id, $options) {
            $params = array_merge([
                'apikey' => $this->apiKey,
                'i' => $id,
            ], $options);

            $response = Http::get($this->baseUrl, $params);
            $data = $response->json();

            if (($data['Response'] ?? '') !== 'True') {
                return collect();
            }

            return collect($this->format($data));
        });
    }

    public function findByTitle(string $title, array $options = []): Collection
    {
        $cacheKey = "omdb_title_" . md5($title);

        return Cache::remember($cacheKey, now()->addHours(24), function () use ($title, $options) {
            $params = array_merge([
                'apikey' => $this->apiKey,
                't' => $title,
            ], $options);

            $response = Http::get($this->baseUrl, $params);
            $data = $response->json();

            if (($data['Response'] ?? '') !== 'True') {
                return collect();
            }

            return collect($this->format($data));
        });
    }

    /**
     * Get poster image URL
     */
    public function getImgUrl(string $id): string
    {
        return $this->baseImgUrl . '?i=' . $id . '&apikey=' . $this->apiKey;
    }

    public function format(array $item): array
    {
        return [
            'imdb_id' => $this->nullIfNA($item['imdbID'] ?? null),
            'title' => $this->nullIfNA($item['Title'] ?? null),
            'year' => $this->nullIfNA($item['Year'] ?? null),
            'rated' => $this->nullIfNA($item['Rated'] ?? null),
            'release_date' => $this->nullIfNA($item['Released'] ?? null)
                ? Carbon::parse($item['Released'])
                : null,
            'duration' => $this->nullIfNA($item['Runtime'] ?? null)
                ? (int) filter_var($item['Runtime'], FILTER_SANITIZE_NUMBER_INT)
                : null,
            'genre' => $this->nullIfNA($item['Genre'] ?? null),
            'director' => $this->nullIfNA($item['Director'] ?? null),
            'writer' => $this->nullIfNA($item['Writer'] ?? null),
            'actors' => $this->nullIfNA($item['Actors'] ?? null),
            'description' => $this->nullIfNA($item['Plot'] ?? null),
            'language' => $this->nullIfNA($item['Language'] ?? null),
            'country' => $this->nullIfNA($item['Country'] ?? null),
            'awards' => $this->nullIfNA($item['Awards'] ?? null),
            'thumbnail' => $this->nullIfNA($item['Poster'] ?? null)
                ? $item['Poster']
                : null,
            'rating' => $this->nullIfNA($item['imdbRating'] ?? null)
                ? (float) $item['imdbRating']
                : 0,
            'votes' => $this->nullIfNA($item['imdbVotes'] ?? null)
                ? (int) str_replace(',', '', $item['imdbVotes'])
                : 0,
            'type' => $this->nullIfNA($item['Type'] ?? null) ?? 'movie',
            'production' => $this->nullIfNA($item['Production'] ?? null),
            'website' => $this->nullIfNA($item['Website'] ?? null),
        ];
    }

    private function nullIfNA($value)
    {
        return ($value === 'N/A' || $value === '') ? null : $value;
    }

}
