<?php

namespace App\Livewire\Forms\User;

use App\Enum\UserRole;
use Livewire\Form;
use Livewire\Attributes\Validate;
use App\Repository\UserRepository;

class AddUserForm extends Form
{
    public $name;
    public $email;
    public $password;
    public $phone;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'phone' => 'required',
        ];
    }

    public function add(UserRole $role)
    {
        $this->validate();
        try {
            $repo = new UserRepository();
            $user = $repo->create($this->all(), $role);
            $this->reset();

            return $user;
        } catch (\Throwable $th) {
            sweetalert()->error($th->getMessage());
            return false;
        }
    }
}
