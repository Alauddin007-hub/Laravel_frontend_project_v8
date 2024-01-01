<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userAuthentication
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
        // echo "User Authenticaton is working";

        // $auth = new Auth();
        // print_r($request);

        $user = Auth::user();
        // echo $user->role;
        
        if($user->role==1){
           return redirect('admin');
            
        } else if($user->role==2){
           return redirect('/teacher');
            
        } else if($user->role==3){
           return redirect('/student');
            
        }

        return $next($request);
    }
}
