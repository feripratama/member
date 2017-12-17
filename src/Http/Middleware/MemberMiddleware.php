<?php namespace Bantenprov\Member\Http\Middleware;

use Closure;

/**
 * The MemberMiddleware class.
 *
 * @package Bantenprov\Member
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class MemberMiddleware
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
        return $next($request);
    }
}
