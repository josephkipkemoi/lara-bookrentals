<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_register_user()
    {
        $response = $this->post('/register',[
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'identification_number' => 329590355,
            'mobile_number' => 254700545727,
            'email' => $this->faker->email(),
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $this->assertAuthenticated();
        $response->assertNoContent();
    }
}
