<?php

namespace Tests\Feature\Referral;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Auth\Models\User;
use Tests\TestCase;
use Illuminate\Support\Str;

class ReferralTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_post_referral_code()
    {
        $referral_code =  substr(Str::uuid()->toString(),0,8);

        $user = User::create([
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'identification_number' => 32959035,
            'mobile_number' => 0700545727,
            'referral_code' => $referral_code,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $response = $this->post('api/v1/referrals');

        $response->assertStatus(200);
    }
}
