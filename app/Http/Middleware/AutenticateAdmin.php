<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;

class AutenticateAdmin extends Authenticate
{
    public function redirectTo($request ) {

        if (! $request->expectsJson()) {
            return route('login-admin');
        }

    }
}
