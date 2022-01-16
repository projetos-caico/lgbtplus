<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContact;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact () {
        return view ('site.contact');
    }

    public function sendMail(SendContact $request)
    {
        
        $contact = Contact::factory($request->only([
            'name','email', 'phone', 'message'
        ]))->make();
        
        $contact->save();

        return back()->with('success', 'Seu email foi enviado');

    }
}
