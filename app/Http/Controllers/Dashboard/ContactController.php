<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{

    public function index (Request $request) {

        //0 - não lidas.
        $contacts = Contact::paginate(10);
        return view('dashboard.contact.index', [
            "contacts" => $contacts
        ]);

    }
    
    public function show (Request $request, Contact $contact) {
        $contact->status = Contact::LIDO; //lida
        $contact->save();        
        return view('dashboard.contact.show', ['contact'=>$contact]);
    }

}
