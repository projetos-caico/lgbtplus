<?php

Use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.homepage');
})->name('site.homepage');

Route::get('/pesquisa', function(){
    return view('site.form-page');
});

Route::get('/sobre', function () {
    return view('site.about');
})->name('site.sobre');

Route::get('/perfil', function () {
    return view('layouts.admin');
})->name('admin')->middleware('auth');

Route::get('/loginAdmin', function () {
    return view('auth.login-admin');
})->name('login-admin');

require __DIR__.'/auth.php';
