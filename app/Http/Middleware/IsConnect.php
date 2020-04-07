<?php

namespace App\Http\Middleware;

use Closure;

class IsConnect
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
        if(Auth::user()->role_id == 1 ||  Auth::user()->role_id == 2 || Auth::user()->role_id== 3 ){
         return $next($request);
    }else{
        return redirect('/')->withErrors(["msg" => "Vous n'étes ni admin , ni Web-master , ni réassortisseur, vous n'avez le droit de  voir nos produits !"]);
    }
       
    }
}
