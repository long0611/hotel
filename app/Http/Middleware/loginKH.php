<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginKH
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $req, Closure $next)
    {
        if (Auth::guard('loyal_customer')->check()) {
            # code...
                return $next($req);

        }else{
            return redirect('login1')->with('loia', 'Bạn chưa đăng nhập');
        }
    }
    
}
