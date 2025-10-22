<?php

namespace Database\Seeders;

use App\Enum\UserRole;
use App\Repository\UserRepository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = $this->command->choice('User Role', UserRole::values(), 0);
        $count = (int) $this->command->ask('Jumlah Account yg ingin dibuat', 10);

        $this->command->info("Membuat {$count} user dengan role {$role} ...");

        $repo = new UserRepository();

        $this->command->withProgressBar(range(1, $count), function () use ($role, $repo) {
            try {
                $repo->create([
                    'name' => fake()->name(),
                    'email' => fake()->unique()->safeEmail(),
                    'password' => '123', // bisa diganti bcrypt('123') kalau repository belum mengenkripsi
                    'phone' => fake()->unique()->phoneNumber(),
                ], UserRole::tryFrom($role));
            } catch (\Throwable $e) {
                // Tampilkan pesan kecil, tapi jangan hentikan proses
                $this->command->warn("Gagal membuat user: {$e->getMessage()}");
            }
        });

        $this->command->newLine(2);
        $this->command->info("✅ Selesai membuat {$count} user dengan role {$role}!");

    }
}
