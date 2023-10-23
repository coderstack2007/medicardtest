<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Patients
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
        dd('done');
        $id = $request->route()->parameter('id');
        $user = auth()->user();

        if ($id !== $user->id) {
            return redirect()->route('/')->with('error', 'У вас нет доступа к этому аккаунту.');
        }

        return $next($request);
    }
}
