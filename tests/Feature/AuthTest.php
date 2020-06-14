<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_user_can_sign_up()
    {
        // $this->withoutExceptionHandling();
        $res = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@test.app',
            'password' => '12345678',
            'password_confirmation' => '12345678',
        ]);
        $res->assertRedirect();
        $this->assertDatabaseHas('users', [
            'name' => 'Test User'
        ]);
    }

    /** @test */
    public function a_user_can_login()
    {
        $res = $this->post('/login', [
            'email' => 'test@test.app',
            'password' => '12345678',
        ]);
        $res->assertRedirect();
    }    
}
