<?php

namespace Tests\Unit;

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic unit test example.
     * @test
     * @return void
     */
    public function can_create_a_test()
    {
        $contact = Contact::factory ([
            'name' => 'john',
            'email' => 'email@email.com',
            'phone' => 558499995454,
            'message' => 'some text'
        ]);

        $this->assertNotNull($contact);
    }

    /**
     * @test
     */
    public function can_access_contact_form () {

        $response = $this->get('/contato');
        $response->assertStatus(200);        
        
    }

    /**
     * @test
     */
    public function can_send_contact_form () {

        $response = $this->call('POST', '/contato', [
            'name' => 'john',
            'email' => 'john@gmail.com',
            'phone' => '8499999999',
            'message' => 'message',
            '_token' => csrf_token(),
        ]);

        $response->assertStatus(302);
        
    }

    /**
     * @test
     */
    public function the_form_was_not_validated()
    {
        $response = $this->call('POST', '/contato', [
            'name' => 'john',
            'email' => '',
            'phone' => '8499999999',
            'message' => 'message',
            '_token' => csrf_token(),
        ]);

        $response->assertStatus(302);        
    }

    /**
     * @test
     */
    public function contact_has_been_saved() {

        $this->assertEquals(0, Contact::count());

        $response = $this->call('POST', '/contato', [
            'name' => 'john',
            'email' => 'email@gmail.cmo',
            'phone' => '8499999999',
            'message' => 'message',
            '_token' => csrf_token(),
        ]);

        $response->assertStatus(302);

        $this->assertEquals(1, Contact::count());
        

    }

    /**
     * @test
     */
    public function the_email_has_been_sent () {

    }

}
