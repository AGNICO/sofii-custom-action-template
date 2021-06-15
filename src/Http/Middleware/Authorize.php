<?php

namespace Agnico\SofiiCustomActionTemplate\Http\Middleware;

use App\Facades\Sofii;
use Agnico\SofiiCustomActionTemplate\SofiiCustomActionTemplate;

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
        $customAction = collect(Sofii::registeredCustomActions())->first([$this, 'matchesCustomAction']);

        return optional($customAction)->authorize($request) ? $next($request) : abort(403);
    }

    /**
     * Determine whether this custom action belongs to the package.
     *
     * @param  \Sofii\CustomAction  $customAction
     * @return bool
     */
    public function matchesCustomAction($customAction)
    {
        return $customAction instanceof SofiiCustomActionTemplate;
    }
}
