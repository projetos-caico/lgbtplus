<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContact;
use App\Models\Contact;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function contact () {
        return view ('site.contact');
    }

    public function sendMail(SendContact $request)
    {
        
        $contact = Contact::factory($request->only([
            'name','email', 'phone', 'message']))
            ->make();

        $contact->save();

        return Redirect::back()->with('success', 'Seu email foi enviado');

    }
}
