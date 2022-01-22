<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate;

class AuthenticateAdmin extends Authenticate
{
    public function redirectTo($request) {

        if (! $request->expectsJson()) {
            return route('admin.login');
        }

    }
}
