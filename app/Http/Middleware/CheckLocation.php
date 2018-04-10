<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Validator;
use App;
use Carbon\Carbon;

class CheckLocation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $location = explode('/', $request->getRequestUri())[1];
        $validator = Validator::make(
            ['locale' => $location],
            ['locale' =>  ['max:2', "regex:(ru|hy|en)"]]
        );
        if ($validator->fails() or empty($location)){
            $location = 'en';
        }
        Carbon::setLocale($location);
        App::setLocale($location);
        return $next($request);
    }
}
