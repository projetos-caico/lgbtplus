<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyMessage extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * 
     * This object is a Message on the database
     *      
     * All information need to reply a message is
     * stored in this object.
     * 
     * 
     */
    public $msgObject;

    /**
     * Response from admin to the client of the service
     * 
     */
    public $answer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $msgObject, $answer)
    {
        $this->msgObject = $msgObject;
        $this->answer = $answer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {        
        return $this->from('lgbtrural@gmail.com')
            ->to('romerito.campos@gmail.com')
            ->view('mail.message.reply')
            ->with([                
                'name' => $this->msgObject->name,
                'text' => $this->msgObject->message,
                'answer' => $this->answer,
            ]);
        
    }
}
