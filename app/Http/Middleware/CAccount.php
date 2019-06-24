<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Cookie;
use App\Http\Requests;
use Closure;

class CAccount
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
        $ck = Cookie::get('user_key');
        $sn = session('user_key');
        if($ck&&$sn){
            if($ck->id==$sn->id&&$ck->password==$sn->password){
                return $next($request);
            }else{
                return redirect("account/register");
            }
        }else{
            return redirect("/");
        }

    }
}
