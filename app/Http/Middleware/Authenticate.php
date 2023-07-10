<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
     /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */

    public function handle($request, Closure $next, ...$guards)
    {
        if ($request->hasCookie("jwt")) {
            $request->headers->set("Authorization", "Bearer " . $request->cookie("jwt"));
        }

        $this->authenticate($request, $guards);

        return $next($request);
    }
}
