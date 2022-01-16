<?php

Use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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

Route::get('/contato', [ContactController::class, 'contact'])
    ->name('site.contact');

Route::post('/contato', [ContactController::class, 'sendMail'])
    ->name('site.sendContact');

Route::get('/perfil', function () {
    return view('layouts.site.admin');
})->name('admin')->middleware('auth');


require __DIR__.'/auth.php';
