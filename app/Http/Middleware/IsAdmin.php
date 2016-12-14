<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class IsAdmin
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

//        dd(\Auth::check());
//        dd(\Auth::user()->isadmin());

        if (\Auth::check() ){


            return $next($request);

        }
        else{

//            echo  123;
//            return $next($request);
            return redirect('admin/login');

        }

//        if (\Auth::check())
//        {
//            return $user->isAdmin();
//        }else{
//
////            return redirect('admin/login');
//
//        }


    }







}
