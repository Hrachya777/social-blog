<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserAuth
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
        if (!Auth::check())
        {
            if ($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
                return redirect()->guest('/');
            }
        }
        else
        {
            if (Auth::user()->role != 'user')
            {
                if ($request->ajax())
                {
                    return response('Unauthorized.', 401);
                }
                else
                {
                    return redirect()->guest('/');
                }
            }
        }
        return $next($request);

    }
}
