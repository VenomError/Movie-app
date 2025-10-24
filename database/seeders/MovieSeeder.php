<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repository\MovieRepository;
use function Laravel\Prompts\{
    progress,
    text,
    info,
    error,
    spin,
    confirm
};

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $repo = new MovieRepository();
        $apiService = new \App\Services\OmdbAPIService();

        $search = text('Search Movie Name', "Search Movie, contoh 'Spiderman'", required: true);

        $page = 1;
        $continue = true;

        while ($continue) {
            $searchResult = spin(fn() => $apiService->search($search, $page), "Searching movies ... (Page $page)");

            $totalResults = (int) $searchResult->get('totalResults', 0);
            $movies = $searchResult->get('movies', collect());

            if ($movies->isEmpty()) {
                info("Tidak ada hasil ditemukan.");
                break;
            }

            info("Menemukan " . $movies->count() . " movie dari total $totalResults hasil.");

            if (confirm("Simpan data movie ke database?", true)) {
                progress("Menyimpan Movies Page $page", $movies, function ($movie, $progress) use ($apiService, $repo) {
                    $title = $movie['Title'] ?? 'Unknown';
                    $progress->hint("Processing Movie: " . $title);

                    try {
                        $imdbId = $movie['imdbID'] ?? null;
                        if (!$imdbId) {
                            error("Skipping movie '$title': IMDb ID kosong.");
                            return;
                        }

                        // Ambil detail lengkap
                        $movieData = spin(fn() => $apiService->findById($imdbId), 'Getting movie detail...');
                        if ($movieData->isEmpty()) {
                            error("Skipping movie '$title': data detail kosong.");
                            return;
                        }

                        // Pastikan data penting ada
                        if (!$movieData->get('imdb_id') || !$movieData->get('title') || !$movieData->get('year')) {
                            error("Skipping movie '$title': data tidak lengkap (imdb_id/title/year).");
                            return;
                        }

                        $created = $repo->create($movieData->toArray());
                        if (!$created) {
                            error("Gagal menyimpan movie '$title'.");
                        }

                    } catch (\Throwable $th) {
                        error("Failed saving movie '$title': " . $th->getMessage());
                    }
                });
            }

            // Cek page berikutnya
            $maxPage = ceil($totalResults / 10);
            if ($page >= $maxPage) {
                info("Semua halaman sudah diproses.");
                break;
            }

            $continue = confirm("Lanjut ke page berikutnya?", true);
            $page++;
        }

        info("Seeding selesai. Total movie di database: " . \App\Models\Movie::count());
    }
}
