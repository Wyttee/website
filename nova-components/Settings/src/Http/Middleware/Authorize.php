<?php

namespace Iboldurev\Settings\Http\Middleware;

use Iboldurev\Settings\Settings;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(Settings::class)->authorize($request) ? $next($request) : abort(403);
    }
}
