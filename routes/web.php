<?php
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
