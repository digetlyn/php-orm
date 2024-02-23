<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        echo "CheckUser 미들웨가 이 경로에 적용되었습니다.";  //이부분은 미들웨어가 잘 작동되었는지 확인 시켜주는 메시지.
        return $next($request);
    }
}
