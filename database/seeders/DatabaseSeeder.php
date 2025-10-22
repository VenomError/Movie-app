<?php

namespace Database\Seeders;

use App\Enum\UserRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        collect(UserRole::cases())->each(function ($role) {
            Role::updateOrCreate(['name' => $role]);
            $this->command->info("seeding  {$role->name}");
        });

    }
}
