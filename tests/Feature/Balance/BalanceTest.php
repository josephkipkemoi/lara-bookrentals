<?php

namespace Tests\Feature\Balance;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Auth\Models\User;
use Tests\TestCase;
use Illuminate\Support\Str;
use Modules\Assignment\Models\Assignment;
use Modules\Balance\Models\Balance;

class BalanceTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_increment_balance_after_task_is_complete()
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

       $balance = Balance::create(['balance' => 200, 'user_id' => $user->id]);

        $response = $this->post("api/v1/balances",[
            'balance' => $this->faker->numberBetween(50,100),
            'user_id' => $user->id
        ]);

        $response->assertCreated();
    }

    public function test_can_get_user_balance()
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

        Balance::create(['balance' => 0, 'user_id' => $user->id]);

        $response = $this->get("api/v1/balances/$user->id");

        $response->assertOk();
    }
}
