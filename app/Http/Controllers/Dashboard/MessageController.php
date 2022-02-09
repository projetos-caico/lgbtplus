<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Message;

class MessageController extends Controller
{

    public function index (Request $request) {

        //0 - não lidas.
        $messages = Message::paginate(10);
        return view('dashboard.message.index', [
            "messages" => $messages
        ]);

    }
    
    public function show (Request $request, Message $message) {
        $message->status = Message::LIDO; //lida
        $message->save();        
        return view('dashboard.message.show', ['message'=>$message]);
    }

}
