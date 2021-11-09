<?php


namespace Farrokh\Cms\Middleware;

use Closure;
class Admin
{
    public function handle($request , \Closure $next)
    {
        return $next($request);
    }
}
