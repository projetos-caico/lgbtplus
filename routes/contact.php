<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Models\Contact;

Route::get('/contato', [ContactController::class, 'contact'])
    ->name('site.contact');

Route::post('/contato', [ContactController::class, 'sendMail'])
    ->name('site.sendContact');

Route::get('/dashboard/email', function () {
        $contacts = Contact::all();
        return view('contact.index', [
            "contacts" => $contacts
        ]);
    })->name('list.email');

use Faker\Factory as Faker;
Route::get('/mail', function(){
    $faker = Faker::create();

    return view('site.mail.contact')->with([
        'name' => 'romerito',
        'message' => $faker->words(200, true),
    ]);
});