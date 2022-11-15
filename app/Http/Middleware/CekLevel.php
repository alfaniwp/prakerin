<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        if (in_array($request->user()->level, $levels)) {
            return $next($request);
        }

        if(Auth::user()->level == 'admin') {
            return redirect('index'); 
        } elseif (Auth::user()->level == 'siswa') {
            return redirect('indexsiswa');
        } elseif (Auth::user()->level == 'guru') {
            return redirect('indexg');
        } elseif (Auth::user()->level == 'instansi') {
            return redirect('indexp');
        }

        
    }
}
