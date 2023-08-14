<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;


class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth()->user()->usertype=='admin'){
        return $next($request);
        }else{
            return Redirect::route('dashboard')->with('error','you have no admin access');
        }
    }
}
