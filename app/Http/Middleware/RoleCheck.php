<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

# RoleCheck middleware’i ile kullanıcı rolünü kontrol ediyoruz.
class RoleCheck
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if (!$user || !in_array($user->role->slug ?? '', ['admin','uzman','yazar'])) {
            abort(403, 'Bu sayfaya erişim izniniz yok.');
        }

        return $next($request);
    }
}
