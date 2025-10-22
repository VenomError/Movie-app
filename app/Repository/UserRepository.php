<?php

namespace App\Repository;

use App\Enum\UserRole;
use App\Models\User;

class UserRepository
{
    public function create(array $data, UserRole $role = UserRole::COSTUMER): User
    {
        $user = new User($data);
        $user->assignRole($role);

        $user->save();

        return $user;
    }

    public function update(User $user, array $data): User
    {
        $user->fill($data);
        $user->save();
        $user->refresh();

        return $user;
    }

    public function delete(User $user): bool|null
    {
        return $user->forceDelete();
    }


}
