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


Route::resource('/dashboard/usuarios', UserController::class)
    ->middleware('auth');

require __DIR__.'/auth.php';