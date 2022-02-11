<?php

namespace App\Http\Controllers\Message;

use App\Http\Requests\SendMessage;
use App\Models\Message;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function contact () {
        return view ('site.contact');
    }
    
    public function index(){
      $contacts = Message::all();

      return view('contact.index', ['contacts'=>$contacts]);
    }

    public function sendMail(SendMessage $request)
    {
        
        $contact = Message::make($request->only([
            'name','email', 'phone', 'message']));

        $contact->save();

        return Redirect::back()->with('success', 'Seu email foi enviado');

    }
}
