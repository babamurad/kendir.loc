<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        App::setLocale(Session::get('locale'));
        Session::put('locale', App::getLocale());

        //dd(app()->getLocale());
        // Определение языка из URL, заголовков или другой логики
        //app()->setLocale($request->segment(1));
        //URL::defaults(['locale' => $request->segment(1)]);

        return $next($request);
    }
}
