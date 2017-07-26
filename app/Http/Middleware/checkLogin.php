<?php 
    namespace App\Http\Middleware;
    use Closure;
    use Auth;
    class checkLogin{
        public function handle($request, Closure $next)
        {
            //kiem tra, neu chua dang nhap thi di chuyen den trang login
            if(Auth::guest() == 1){
                return redirect(url('login'));
            }else
                return $next($request);
        }
    }
 ?>
