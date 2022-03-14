<?php

Use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('site.homepage');
})->name('site.homepage');

Route::get('/pesquisa', function(){
    return view('site.form-page');
});

Route::get('/sobre', function () {
    return view('site.about');
})->name('site.sobre');

Route::resource('usuarios', UserController::class)->middleware('auth:admin');

// Route::get('/dashboard/criar/usuario', function () {
//     return view('user.new_user');
//  })->name('new.user')->middleware('auth:admin');

//  Route::get('/dashboard/usuarios', [UserController::class])->middleware('auth:admin');

require __DIR__.'/auth.php';

