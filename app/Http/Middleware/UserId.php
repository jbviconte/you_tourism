<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserId
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
      $userId = $request->id;

      if($userId == Auth::id()){
          return $next($request);
        } else {
          return redirect('/'); //redirect anyware.
        }
    }
}
