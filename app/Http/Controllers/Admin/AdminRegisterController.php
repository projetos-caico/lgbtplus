<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class AdminRegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('auth.register-admin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults(), 'min:8', 'max:100'],
        ]);

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
      
        // event(new Registered($admin));
       
        Auth::guard('admin')->login($admin);
        

        return redirect(RouteServiceProvider::ADMIN);
    }
}
