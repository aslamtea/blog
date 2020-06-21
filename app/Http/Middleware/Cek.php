<?php

namespace App\Http\Middleware;

use Closure;

use App\Post;

class Cek
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($request->all() == $guard) {
            return $next($request);
        }

        return redirect('/');
    }
}
