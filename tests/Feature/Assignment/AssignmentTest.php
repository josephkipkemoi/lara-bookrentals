<?php

namespace Tests\Feature\Assignment;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Assignment\Models\Assignment;
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
        $response = $this->post('api/v1/assignments',[
            'question' => $this->faker()->text(),
            'category' => $this->faker()->word()
        ]);

        $response->assertCreated();
    }

    public function test_can_get_assignment_by_id()
    {
        $assignment = Assignment::create([
            'question' => $this->faker()->text(),
            'category' => $this->faker()->word()
        ]);

        $response = $this->get("/api/v1/assignments/{$assignment->id}");

        $response->assertOk();
    }
}
