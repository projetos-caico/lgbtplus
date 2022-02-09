<?php

namespace App\Mail;

use App\Models\Admin;
use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $author;
    protected $mensage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Admin $admin, Message $contact)
    {
        $this->author = $admin;
        $this->contact = $contact; 
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
            ->view('site.mail.contact')
            ->with([                
                'name' => $this->author->name,
                'message' => $this->contact->message,
            ]);
    }
}
