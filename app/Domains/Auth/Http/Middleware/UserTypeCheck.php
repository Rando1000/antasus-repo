<?php

namespace App\Domains\Auth\Http\Middleware;

use Closure;

/**
 * Class UserTypeCheck.
 */
class UserTypeCheck
{
    /**
     * @param $request
     * @param  Closure  $next
     * @param $type
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $type)
    {
        if ($request->user() && $request->user()->isType($type)) {
            return $next($request);
        }

        notify()->error('You do not have access to do that.');
        return redirect()->route('frontend.index');
    }
}
