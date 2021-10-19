<?php

namespace App\Http\Middleware\Admin;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminVerified
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
        $admin = Admin::firstWhere('email', $request->input('email'));

        if($admin && $admin->status == 'not_verified'){
            throw ValidationException::withMessages([
                'not_verified' =>__('auth.not_verified'),
            ]);
        }
        return $next($request);
    }
}
