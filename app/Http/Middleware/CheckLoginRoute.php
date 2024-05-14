<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLoginRoute
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

        $rota = explode('/',$request->path());
        //dump($rota, $request->session()->has('user_logged_in'));



        if ($rota[0] == 'app' && !$request->session()->has('user_logged_in')) {

            
            
            return redirect()->route('login');
            

        }
       
        


        return $next($request);

    }
}
