<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repository\MovieRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use function Laravel\Prompts\{
    progress,
    text,
    info,
    error
};

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $repo = new MovieRepository();
        $count = (int) text("jumlah movie ", default: 10);
        progress("membuat movie", range(1, $count), function ($step, $progress) use ($repo) {
            try {
                DB::beginTransaction();
                $title = fake()->unique()->sentence(3);
                $progress->hint("Create Movie " . $step);
                $movie = $repo->create([
                    'title' => $title, // contoh: "The Lost Journey"
                    'description' => fake()->realText(200),   // deskripsi acak
                    'duration' => fake()->numberBetween(60, 210), // menit (1–3,5 jam)
                    'genre' => fake()->randomElement([
                        'Action',
                        'Drama',
                        'Comedy',
                        'Romance',
                        'Thriller',
                        'Horror',
                        'Sci-Fi',
                        'Adventure'
                    ]),
                    'rating' => fake()->randomFloat(1, 1, 10), // contoh: 7.8
                    'thumbnail' => "https://placehold.co/400x400/png",
                    'release_date' => fake()->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
                ]);
                DB::commit();
            } catch (\Throwable $th) {
                DB::rollBack();
                error($th->getMessage());
            }
        });
    }
}
