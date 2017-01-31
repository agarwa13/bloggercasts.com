<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Cookie;
use Closure;

class SetLessonsViewedCookie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Cookie::has('lessonsViewed')){
            $lessonsViewed = 1;
        }else{
            $lessonsViewed = $request->cookie('lessonsViewed') + 1;
        }

        // The Cookie will Expire in One Day
        return $next($request)->cookie('lessonsViewed',$lessonsViewed, 1440);
    }
}
