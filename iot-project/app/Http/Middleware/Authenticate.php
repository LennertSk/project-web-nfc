<?php

namespace App\Http\Middleware;

// use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Cookie;

// class Authenticate extends Middleware
class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        // if (! $request->expectsJson()) {
        //     return url('welcome');
        // }
        // if (is_null(Cookie::get('username'))) {
        //     return redirect('ddd');
        // }
        
    }
}
