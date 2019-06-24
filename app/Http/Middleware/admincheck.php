<?php

namespace App\Http\Middleware;
use App\Http\Requests;
use Closure;

class admincheck
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
        if(session("admin_key")){
            return $next($request);
        }else{
            return redirect("/admin/login");
        }
        
    }
}
