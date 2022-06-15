<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if($request -> input('role') != "admin"){
            return response()->json([
                "success" => false,
                "message" => "Vous n'etes pas authorisé a faire cette action. Vous devriez etre un administrateur"
            ]);
        }
        return $next($request);
    }
}
