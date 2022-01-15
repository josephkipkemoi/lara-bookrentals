<?php

namespace Tests\Feature\Contact;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_unauthorized_user_can_send_contact_message()
    {
        $response = $this->post('api/v1/contacts',[
            'name' => $this->faker()->name(),
            'email' => $this->faker()->email(),
            'mobile_number' => $this->faker()->numberBetween(10,200),
            'title' => $this->faker()->word(6),
            'body' => $this->faker()->text()
        ]);

        $response->assertCreated();
    }
}
