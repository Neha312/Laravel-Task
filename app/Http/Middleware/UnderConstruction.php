<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class UnderConstruction
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
        /* Global-route-group middleware*/
        throw new HttpException(503);

        //pass request in url
        //dd($request);

        //check a request-pass $user in function parameter
        //dd($request->user);
        // if ($user === 'admin') {
        //     return redirect('/');
        // }
        // return $next($request);
    }
}
