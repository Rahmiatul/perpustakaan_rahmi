<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Asumsikan kamu punya kolom `role` di tabel users
        // dan nilai role "admin" untuk admin, "user" untuk pengguna biasa
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        // Kalau bukan admin, redirect atau abort
        return redirect('/')->with('error', 'Kamu tidak punya akses ke halaman admin.');
    }
}
