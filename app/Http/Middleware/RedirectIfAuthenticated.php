<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
<<<<<<< HEAD
                // Check the authenticated user's role
                $user = Auth::guard($guard)->user();
                if ($user->usertype === 'admin') {
                    return redirect()->route('admin.dashboard');
                } else {
                    return redirect()->route('dashboard');
                }
=======
                return redirect(RouteServiceProvider::HOME);
>>>>>>> main
            }
        }

        return $next($request);
    }
}
<<<<<<< HEAD

=======
>>>>>>> main
