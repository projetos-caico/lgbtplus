<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ReplyMessage;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function index (Request $request) {

        $filter = $request->query('filter');        

        if (isset($filter)) {
            $messages = Message::where('status', '=', $filter)
                ->orderBy('created_at','asc')
                ->orderBy('status');            
        } else {
            $messages = Message::orderBy('created_at','asc')
                ->orderBy('status');
        }

        $messages = $messages->paginate(10);
        $messages->appends(['filter'=>$filter]);
        return view('dashboard.message.index', [
            "messages" => $messages,
        ]);

    }
    
    public function show (Request $request, Message $message) {

        if (!$message->status == Message::RESPONDIDO){
            $message->status = Message::LIDO; //lida 
            $message->save();
        }        
        return view('dashboard.message.show', ['message'=>$message]);
    }

    public function reply(Request $request, Message $message) {        

        //validating data
        $request->validate([
            'text' => 'required',
        ]);

        //definir mensagem como respondida
        $message->status = Message::RESPONDIDO;        
        $text = $request->post('text');

        Mail::to($message->email)
            ->send(new ReplyMessage($message, $text));

        //atualizar dados da mensagem no banco de dados
        $message->awnser = $text;
        $message->user_id = Auth::id();
        $message->save();

        return back();

    }

}
