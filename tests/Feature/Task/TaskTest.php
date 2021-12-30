<?php

namespace Tests\Feature\Task;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_post_task_status()
    {
        $response = $this->post('api/v1/tasks',[
            'task_completed' => $this->faker()->boolean(),
            'task_id' => 1, // to reference assignment id
            'task_started_at' => $this->faker()->time()
         ]);

        $response->assertCreated();
    }
}
