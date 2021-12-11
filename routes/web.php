<?php
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/sobre', function () {
    return view('dashboard.about');
})->name('about');

Route::get('/contato', function () {
    return view('dashboard.contact');
})->name('contact');

Route::get('/perfil', function () {
    return view('dashboard.profile');
})->name('perfil')->middleware(['auth']);

Route::resource('news', NewsController::class);

require __DIR__.'/auth.php';
