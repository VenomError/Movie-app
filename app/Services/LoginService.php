<?php

namespace App\Services;

use App\Enum\UserRole;
use Illuminate\Support\Facades\Auth;

class LoginService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public $email,
        public $password,
        public bool $remember = true
    ) {
        //
    }

    public function handle()
    {
        $isLogin = Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ], $this->remember);
        if (!$isLogin) {
            throw new \Exception("Invalid email or password");
        } else {
            // check user role and redirect
            $user = Auth::user();
            sweetalert("Login Success");
            if ($user->hasRole(UserRole::ADMIN)) {
                return redirect()->route('dashboard');
            } else {
                return redirect('/');
            }
        }

    }
}
