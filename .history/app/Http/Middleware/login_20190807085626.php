<?php

namespace App\Http\Middleware;

use Closure;

class login
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
      

        if(Auth::check()){
            $user=Auth::user();
            if($user=Auth::user()->quyen==1)
            return $next($request);
            else {
                return view('pages/dangnhap');
            }
        }
       else return view('pages/dangnhap');
       
    }
    }

