<?php

namespace ECDoc\Ecdocs\Http\Middleware;

use Illuminate\Support\Facades\Gate;
class RestrictDocumentation
{
    public function handle($request, \Closure $next)
    {
        if(app()->environment('local')){
            return $next($request);
        }

        if (Gate::allows('apiDocs')){
            return $next($request);
        }

        abort(403);
    }
}
