<?php

use App\Http\Controllers\Admin\AdminController;
Use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [AdminController::class, 'home'])
    ->name('admin.home')->middleware('auth:admin');