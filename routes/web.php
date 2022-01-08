<?php

Use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('layouts.site.admin');
})->name('admin')->middleware('auth');

require __DIR__.'/auth.php';
