<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\App;

class apiLang
{
    public function handle($request, Closure $next)
    {
        $lang = 'ar';
        if ($request->header('lang') != null && in_array($request->header('lang'), ['ar', 'en', 'ur'])) {
            $lang = $request->header('Lang');
        } elseif (auth()->check()) {
            $lang = auth()->user()->lang;
        }

        App::setLocale($lang);
        Carbon::setLocale($lang);

        return $next($request);
    }
}
