<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct () {
        $this->middleware(['auth:admin']);        
    }
       
    public function profile () {
        return view('layouts.site.admin');
    }

    
}
