<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WebGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     *
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "Hello";
        // if($request->age <18){
        //     echo "You're not allow to access the page";
        //     die;
        // }
        // echo "<pre>";
        // Print_r(session()->all());
        // die;
        // if(session()->has('user_id'))
             return $next($request);
        // else
        //      return redirect('no-access');
    }
}
