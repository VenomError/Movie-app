<?php

namespace App\Services;

use App\Models\User;
use App\Enum\UserRole;
use App\Repository\UserRepository;

class RegisterService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public $name,
        public $email,
        public $password,
        public $phone,
    ) {
        //
    }

    public function handle()
    {
        try {
            $repo = new UserRepository();
            $repo->create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
                'phone' => $this->phone,
            ], UserRole::COSTUMER);

            $loginService = new LoginService($this->email, $this->password);
            return $loginService->handle();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
