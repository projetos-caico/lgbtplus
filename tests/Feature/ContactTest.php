<?php

namespace Tests\Feature;

use App\Mail\ContactMail;
use App\Models\Admin;
use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactTest extends TestCase
{
    /**
     * 
     * TODO: 
     * - Testar se um email foi envado
     * 
     * @test
     * @return void
     */
    public function an_email_has_been_sent()
    {

        Mail::fake();

        $admin = Admin::factory()->create();
        $contact = Contact::first();

        Mail::send(new ContactMail($admin, $contact));
        Mail::assertSent(ContactMail::class);

        Mail::assertSent(ContactMail::class, function($mail, $admin) {
            
            $mail->build();
            $this->assertTrue($mail->hasFrom($admin->email));
        });

        
        
    }
}
