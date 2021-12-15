<?php

Use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.homepage');
})->name('site.homepage');

Route::get('/sobre', function () {
    return view('site.about');
})->name('site.sobre');


require __DIR__.'/auth.php';
