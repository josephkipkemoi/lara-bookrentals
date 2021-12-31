<?php

namespace Tests\Feature\Review;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Auth\Models\User;
use Tests\TestCase;

class ReviewTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;
    /**
     * Test user can post review.
     *
     * @return void
     */
    public function test_user_can_post_review()
    {
        $user = User::create([
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'identification_number' => 329590355,
            'mobile_number' => 254700545727,
            'email' => $this->faker->email(),
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $response = $this->post('api/v1/reviews',[
            'review_title' => 'Good webiste',
            'review_body' => $this->faker()->text(),
            'review_rating' => $this->faker()->numberBetween(1,5),
            'user_id' => $user->id
        ]);

        $response->assertCreated();
    }

    public function test_can_get_reviews()
    {
        $user = User::create([
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'identification_number' => 329590355,
            'mobile_number' => 254700545727,
            'email' => $this->faker->email(),
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $response = $this->post('api/v1/reviews',[
            'review_title' => 'Good webiste',
            'review_body' => $this->faker()->text(),
            'review_rating' => $this->faker()->numberBetween(1,5),
            'user_id' => $user->id
        ]);

        $response = $this->get('api/v1/reviews');

        $response->assertOk();
    }
}
