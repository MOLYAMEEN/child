<?php

namespace App\Http\Middleware;

use Closure;

class CheckPassword
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
        function handle(Request $request, Closure $next):Response{
            if( $request->api_password !==env('API_PASSWORD',"hADUMCGFEgQoKL2TDRJ43BBiujk"))
          

           return response()->json(['message'=>'go away']);
          }
             return $next($request);
               }
}
