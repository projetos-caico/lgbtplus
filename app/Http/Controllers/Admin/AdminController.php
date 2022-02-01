<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
       
    public function profile () {
        return view('layouts.site.admin');
    }

    
}
