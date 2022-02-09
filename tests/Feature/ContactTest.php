<?php

namespace Tests\Feature;

use App\Mail\ContactMail;
use App\Models\Admin;
use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\AssignOp\Concat;
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

        // Mail::assertSent(ContactMail::class, function($mail) {
            
        //     $mail->build();
        //     $this->assertTrue($mail->hasFrom($admin->email));
        // });

    }

    /**
     * 
     * @test
     * @return void
     */
    public function contact_message_has_been_read () {

        $user = Admin::first();

        $message = Contact::first()->message;
        $email = Contact::first()->email;

        $response = $this->actingAs($user, 'admin')->get('/dashboard/email/1/show');
        $response->assertStatus(200);
        $response->assertSeeText($email);
        $response->assertSeeText($message);

        $this->assertEquals(1,Contact::first()->status);
        
    }

    /**
     * 
     * 
     * @test
     */
    public function anauthorized_cannot_access_message () {

        $response = $this->get(route('list.email'));
        $response->assertStatus(302);

    }

    /**
     * 
     * 
     * @test
     */
    public function authorized_users_can_access_messages () {
        $admin = Admin::first();
        
        $response = $this->actingAs($admin, 'admin')
            ->get('/dashboard/email');

        $response->assertStatus(200);
    }

    /**
     * 
     * 
     * @test
     */
    public function messages_read_after_access () {
        $admin = Admin::first();
        Contact::factory()->create();
        $response = $this->actingAs($admin, 'admin')
            ->get('/dashboard/email/1/show');
        $response->assertStatus(200);
        $status = Contact::first()->status;
        $this->assertEquals($status,Contact::LIDO);
    }

    
}
