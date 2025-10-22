<?php

namespace Database\Seeders;

use App\Repository\UserRepository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enum\UserRole;
use function Laravel\Prompts\{
    progress,
    text,
    info,
    error,
    select
};
class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $repo = new UserRepository();
        $data['name'] = text('Name', 'Input Full Name', required: true);
        $data['email'] = text('Email', 'Input Email', required: true, validate: "email|unique:users,email");
        $data['password'] = text('Password', 'Input Password', required: true, default: '123');
        $data['phone'] = text('Phone', 'Input Phone Number', required: true, default: fake()->phoneNumber);
        $role = select('Role', UserRole::values(), required: true, default: UserRole::ADMIN->value);

        try {
            $user = $repo->create($data, UserRole::tryFrom($role));
            info($role . " Berhasil di Buat");
        } catch (\Throwable $th) {
            error("Error - " . $th->getMessage());
        }

    }
}
