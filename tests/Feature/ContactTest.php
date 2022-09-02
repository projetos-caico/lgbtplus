<?php

namespace Tests\Feature;


use App\Mail\MessageMail;
use App\Models\Admin;
use App\Models\Message;
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
        $contact = Message::first();

        Mail::send(new MessageMail($admin, $contact));
        Mail::assertSent(MessageMail::class);

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

        $message = Message::first()->message;
        $email = Message::first()->email;

        $response = $this->actingAs($user, 'admin')->get('/dashboard/email/1/show');
        $response->assertStatus(200);
        $response->assertSeeText($email);
        $response->assertSeeText($message);

        $this->assertEquals(1,Message::first()->status);
        
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
        Message::factory()->create();
        $response = $this->actingAs($admin, 'admin')
            ->get('/dashboard/email/1/show');
        $response->assertStatus(200);
        $status = Message::first()->status;
        $this->assertEquals($status,Message::LIDO);
    }

    
}
