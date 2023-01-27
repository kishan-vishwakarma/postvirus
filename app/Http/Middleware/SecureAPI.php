<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecureAPI
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

//        echo env("APP_API_KEY");
//        echo env("APP_API_KEY") != request()->bearerToken();
//        echo request()->bearerToken();
        if(env("APP_API_KEY") != request()->bearerToken())
        {
            return redirect()->to('api/unauthorized');
        }
        return $next($request);

    }
}
