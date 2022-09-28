<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session ;

class localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $default=config('app.name');
        $browserLanguage=$request->header('accept-language');
        if($browserLanguage){
            list($default)=explode(',',$browserLanguage);
        }
//dd($default);
        $default=Session::get('locale',$default);
        $lang=$request->query('lang',$default);
        Session::put('locale',$lang);
        
        App::setlocale($lang);
        return $next($request);
    }
}
