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
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $msgObject)
    {
        $this->msgObject = $msgObject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {        
        return $this->view('mail.message.reply');
        
    }
}
