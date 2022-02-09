<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class AdminTest extends TestCase
{

    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function authenticated_user_can_access()
    {
        $response = $this->post('/login/admin', [
            'email' => 'romerito.campos@gmail.com',
            'password' => '123123123',
            '_token' => csrf_token()
        ]);


        $response->assertRedirect('/perfil');
    }
}
