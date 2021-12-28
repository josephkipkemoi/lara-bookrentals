<?php

namespace Tests\Feature\Balance;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BalanceTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_post_balance()
    {
        $response = $this->post('api/v1/balance',[
            'balance' => $this->faker->numberBetween(50,100),
        ]);

        $response->assertCreated();
    }
}
