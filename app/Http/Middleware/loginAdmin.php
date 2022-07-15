<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class loginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            # code...
            $user = Auth::user();
            if ($user->position == 2) {
                # code...
                return $next($request);

            }else{
                return redirect('quanly/login')->with('loi', 'Bạn không có quyền vào trang này');
            }
        }else{
            return redirect('quanly/login')->with('loia', 'Bạn chưa đăng nhập');
        }
    }
}
