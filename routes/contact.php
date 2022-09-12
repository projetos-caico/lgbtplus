<?php


use App\Http\Controllers\Dashboard\MessageController;
use App\Http\Controllers\Message\MessageController as PublicMessageController;
use Illuminate\Support\Facades\Route;
use App\Models\Contact;

/**
 * Neste arquivo, foram adicionadas rotas para lidar com o contato com
 * o projeto via form disponível em http://lgbtrural.ca.ifrn.edu.br/contato.
 * 
 * 
 * 
 */

Route::get('/contato', [PublicMessageController::class, 'contact'])
    ->name('site.contact');

Route::post('/contato', [PublicMessageController::class, 'sendMail'])
    ->name('site.sendContact');


/** admin routes */


Route::group(['prefix'=>'dashboard', 'middleware'=>['auth']], function() {    

    Route::get('/email', [MessageController::class, 'index'])
        ->name('list.email');

    Route::get('/email/{message}/show', [MessageController::class, 'show'])
        ->name('see.email');

}); 
    




use Faker\Factory as Faker;
Route::get('/mail', function(){
    $faker = Faker::create();

    return view('site.mail.contact')->with([
        'name' => 'romerito',
        'message' => $faker->words(100, true),
    ]);
});