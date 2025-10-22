<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LogoutService
{
    public static function handle(Request $request)
    {
        // 🔹 1. Hapus sesi autentikasi
        Auth::logout();

        // 🔹 2. Invalidate session
        $request->session()->invalidate();

        // 🔹 3. Regenerate token CSRF
        $request->session()->regenerateToken();

        // 🔹 4. (Opsional) Hapus semua data sesi tambahan
        Session::flush();

        return redirect()->route('login');
    }
}
