<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {

        if (!Auth::check()) {

            session()->put('url.intended', url()->current());

            return redirect()->route('admin.show.login')
                ->with('error', 'يجب تسجيل الدخول أولاً');
        }

        return $next($request);
    }
}
