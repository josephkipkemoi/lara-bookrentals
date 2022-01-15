<?php

namespace Tests\Feature\Payment;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Auth\Models\User;
use Illuminate\Support\Str;
use Modules\Payment\Models\Payment;
use Tests\TestCase;

class PaymentTest extends TestCase
{
    // use RefreshDatabase;
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_persist_payment_by_user()
    {
        $user = User::create([
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'identification_number' => 32959035,
            'mobile_number' => 0700545727,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $response = $this->post("api/v1/{$user->id}/payments",[
            'amount' => Payment::ASSISTANT_PAYMENT_FEE
        ]);

        $response->assertCreated();
    }

    public function test_user_is_activated_after_payment_is_created()
    {
        $user = User::create([
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'identification_number' => 32959035,
            'mobile_number' => 0700545727,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $this->assertEquals(User::where('id',$user->id)->first()->verified, false);

        $user->payment()->create(['amount' => Payment::ASSISTANT_PAYMENT_FEE]);

        $this->assertEquals(User::where('id',$user->id)->first()->verified, true);
    }

}
