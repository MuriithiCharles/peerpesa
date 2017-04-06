<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CheckRole
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
        if ($request->user() === null) {
           // return response("Insufficient permissions", 401);
            echo '<script type="text/javascript">
alert("Insufficient permissions");
history.back();
</script>';


        }
        $actions = $request->route()->getAction();
        $roles = isset($actions['roles']) ? $actions['roles'] : null;

        if ($request->user()->hasAnyRole($roles) || !$roles) {
            return $next($request);
        }
       // return response("Insufficient permissions", 401);
        //Session::flash('message', 'Insufficient permissions');
       // return Redirect::back()->withErrors(['Insufficient permissions']);
      /*  return Redirect::back()->with("  <script type='text/javascript'>
            alert('Insufficient permissions')
                 </script>");*/
        echo '<script type="text/javascript">
alert("Insufficient permissions");
history.back();
</script>';

    }
}
