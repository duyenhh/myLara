<?php

namespace App\Http\Middleware;

use Closure;

class TeacherAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
      public function handle($request, Closure $next, $guard = 'teachers')
    {   //nếu chưa đăng nhập với bảng admins thì link sang trang login?
        if (!Auth::guard($guard)->check()) {
            //thì sẽ trả về dduongf dẫn home
            return redirect('/login');
        }
                //ko thì sẽ thực hiện requetst yêu cầu 
        return $next($request);
    }
}
