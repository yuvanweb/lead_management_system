<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
  
        public function handle(Request $request, Closure $next, $role)
    {


        $url="";
        if($request->user()->role !== $role){
            $url="/test-session";
            return redirect($url);
        }else{
            $url="logout";  
        }
        return $next($url);
    }
      
}
