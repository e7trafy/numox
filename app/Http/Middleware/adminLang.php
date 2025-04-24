<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\App;

class adminLang
{
    public function handle($request, Closure $next)
    {
        $lang = 'ar';

        App::setLocale($lang);
        Carbon::setLocale($lang);

        return $next($request);
    }
}
