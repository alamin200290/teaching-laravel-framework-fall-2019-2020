<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUserType
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

        /*if($request->session()->get('user') == "admin"){
            return $next($request);
        }else{
            return redirect()->route('student.index');
        }*/

        if($request->session()->get('user')->type == "admin"){
            return $next($request);
        }else{
            return redirect()->route('student.index');
        }
    }
}
