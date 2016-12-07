<?php

namespace App\Http\Middleware;

use Closure;

class RedirectFacultysAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'facultys')
    {   //nếu đã đăng nhập với bảng admins thì link sang trang home?
        if (Auth::guard($guard)->check()) {
            //thì sẽ trả về dduongf dẫn home
            return redirect('/index');
        }
                //ko thì sẽ thực hiện requetst yêu c
        return $next($request);
    }
}
