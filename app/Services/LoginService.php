<?php

namespace App\Services;

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
        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];
        $isLogin = Auth::attempt($credentials, $this->remember);
        if ($isLogin) {
            throw new \Exception("Invalid email or password");
        }

        // check user role and redirect
        sweetalert("Login Success");
        return redirect('/');
    }
}
