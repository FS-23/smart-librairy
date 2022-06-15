<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsTokenValid
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
        if($request->input('token') != "1234"){
            return response()->json([
                "success" => false,
                "message" => "Your token is not valid",
            ]);
        }
        return $next($request);
    }
}
