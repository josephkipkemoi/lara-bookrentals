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
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'id_number' => $this->faker->numberBetween(0,10),
            'mobile_number' => $this->faker->numberBetween(0,10),
            'email_address' => $this->faker->email(),
            'password' => Hash::make('password'),
        ]);
            dd($response);
        $this->assertAuthenticated();
        $response->assertNoContent();
    }
}
