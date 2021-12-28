<?php

Use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function(){
    return view('dashboard.homepage');
})->middleware(['auth']);

Route::get('/', function () {
    return view('site.homepage');
})->name('site.homepage');

Route::get('/pesquisa', function(){
    return view('site.form-page');
});

Route::get('/sobre', function () {
    return view('site.about');
})->name('site.sobre');


require __DIR__.'/auth.php';
