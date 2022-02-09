<?php


use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Contact\ContactController as PublicContactController;
use Illuminate\Support\Facades\Route;
use App\Models\Contact;

/**
 * Neste arquivo, foram adicionadas rotas para lidar com o contato com
 * o projeto via form disponível em http://lgbtrural.ca.ifrn.edu.br/contato.
 * 
 * 
 * 
 */

Route::get('/contato', [PublicContactController::class, 'contact'])
    ->name('site.contact');

Route::post('/contato', [PublicContactController::class, 'sendMail'])
    ->name('site.sendContact');


/** admin routes */


Route::group(['prefix'=>'dashboard', 'middleware'=>['auth:admin']], function() {    

    Route::get('/email', [ContactController::class, 'index'])
        ->name('list.email');

    Route::get('/email/{contact}/show', [ContactController::class, 'show'])
        ->name('see.email');

}); 
    




use Faker\Factory as Faker;
Route::get('/mail', function(){
    $faker = Faker::create();

    return view('site.mail.contact')->with([
        'name' => 'romerito',
        'message' => $faker->words(200, true),
    ]);
});