<?php

namespace Tests\Feature\Category;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * Test can post category
     *
     * @return void
     */
    public function test_can_post_category()
    {
        $response = $this->post('api/v1/categories', [
            'category' => $this->faker()->word(6),
        ]);

        $response->assertCreated();
    }

    public function test_can_get_categories()
    {
        $this->post('api/v1/categories', [
            'category' => $this->faker()->word(6),
        ]);
        $this->post('api/v1/categories', [
            'category' => $this->faker()->word(6),
        ]);

        $response = $this->get('api/v1/categories');

        $response->assertOk()
                 ->assertJsonCount(2);
    }

}
