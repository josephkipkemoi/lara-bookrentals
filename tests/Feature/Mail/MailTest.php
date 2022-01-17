<?php

namespace Tests\Feature\Mail;

use App\Mail\PaymentProcessed;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;
use Illuminate\Support\Facades\Route;

class MailTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_email_is_sent_after_payment_is_made()
    {
        $response = $this->get('api/v1/send-mail');

        $response->assertOk();
    }
}
