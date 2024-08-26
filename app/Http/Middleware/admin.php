<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {



    //     if(Auth::check()){
    //         if(Auth::user()->role == "admin"){

    //             return $next($request);
    //     }elseif(Auth::user()->role == "user"){
    //             return redirect('/home')->with('message','you are not admin');
    //     }
    // }else{
    //     return redirect('/login')->with('message','please login first');
    // }




        if(Auth::user()->role == 'admin'){

            return $next($request);
        }
        else{
            return redirect('/home');
        }
    }
}