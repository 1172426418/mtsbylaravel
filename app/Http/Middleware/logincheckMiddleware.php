<?php

namespace App\Http\Middleware;

use Closure;
/**
  * Handle an incoming request.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \Closure  $next
  * @return mixed
  */
 public function handle($request, Closure $next)
 {
     // 检查session，判断用户登录状态.
     if (!session()->has("user")) {
         return redirect("/login");
     }
     return $next($request);
 }