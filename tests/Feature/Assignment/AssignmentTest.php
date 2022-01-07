<?php

namespace Tests\Feature\Assignment;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Assignment\Models\Assignment;
use Modules\Category\Models\Category;
use Tests\TestCase;

class AssignmentTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_post_assignment()
    {
        $category = Category::create(['category' => $this->faker()->text()]);

        $response = $this->post("api/v1/$category->id/assignments",[
            'question' => $this->faker()->text(),
        ]);

        $response->assertCreated();
    }

    public function test_can_get_assignments_by_category()
    {
        $category = Category::create(['category' => $this->faker()->text()]);

        $this->post("api/v1/$category->id/assignments",[
            'question' => $this->faker()->text(),
        ]);

        $response = $this->get("/api/v1/$category->id/assignments");

        $response->assertOk();
    }

    public function test_can_get_assignment_by_id()
    {
        $category = Category::create(['category' => $this->faker()->word(6)]);

        $assignment =  $this->post("api/v1/$category->id/assignments", [
            'question' => $this->faker()->text()
        ])->getData();

        $response = $this->get("api/v1/$category->id/assignments/$assignment->id");

        $response->assertOk();
    }
}
