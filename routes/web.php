<?php

use App\Http\Controllers\Admin\AdminController;
Use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



Route::get('/dashboard', function(){
    return view('site.homepage');
})->middleware(['auth'])->name('user.home');

Route::get('/', function () {
    return view('site.homepage');
})->name('site.homepage');

Route::get('/pesquisa', function(){
    return view('site.form-page');
});

Route::get('/sobre', function () {
    return view('site.about');
})->name('site.sobre');

Route::get('/perfil', [AdminController::class, 'profile'])
    ->middleware('auth:admin')
    ->name('admin.home');

Route::get('/contato', [ContactController::class, 'contact'])
    ->name('site.contact');

Route::post('/contato', [ContactController::class, 'sendMail'])
    ->name('site.sendContact');


use Faker\Factory as Faker;
Route::get('/mail', function(){
    $faker = Faker::create();

    return view('site.mail.contact')->with([
        'name' => 'romerito',
        'message' => $faker->words(200, true),
    ]);
});

require __DIR__.'/auth.php';

