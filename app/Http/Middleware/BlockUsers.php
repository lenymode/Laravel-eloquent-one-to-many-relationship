<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BlockUsers
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
        if (auth()->user()->is_verified == 0) {
            $response = $next($request); // this is response from controller 
            // change the response and send to browser
            $content = $response->getContent();

    // ... process widgets in $content

          return $response->setContent($content);
            
        }
        return response()->json('You have been banned for this activity!!'); 
   }

}
