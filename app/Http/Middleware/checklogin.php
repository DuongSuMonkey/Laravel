<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Models\Activity;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
class checklogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
         $user =  User::where('email', $request->email)->first();
         if (!$user) {
            return Redirect::route('login')->with('error', 'Người dùng không tồn tại');
        } else {

            return $next($request);
        }
    }

}
