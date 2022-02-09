<?php

namespace App\Http\Controllers\Contact;

use App\Http\Requests\SendContact;
use App\Models\Contact;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact () {
        return view ('site.contact');
    }
    
    public function index(){
      $contacts = Contact::all();

      return view('contact.index', ['contacts'=>$contacts]);
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
