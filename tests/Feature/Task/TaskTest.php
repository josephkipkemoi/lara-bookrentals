<?php

namespace Tests\Feature\Task;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Assignment\Models\Assignment;
use Modules\Auth\Models\User;
use Modules\Balance\Models\Balance;
use Modules\Category\Models\Category;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

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
        $user = User::create([
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'identification_number' => 329590355,
            'mobile_number' => 254700545727,
            'email' => $this->faker->email(),
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $category = Category::create([
            'category' => $this->faker()->word(6),
        ]);

        $this->post("api/v1/{$category->id}/assignments", [
            'question' => $this->faker()->text()
        ]);
        $assignment = Assignment::first();

        $response = $this->post("api/v1/{$user->id}/tasks",[
            'assignment_id' => $assignment->id,
            'task_completed' => $this->faker()->boolean(),
            'task_completed_at' => $this->faker()->time(),
            'assignment_rating' => $this->faker()->numberBetween(0,10),
            'assignment_earning' => $this->faker()->numberBetween(50,100),
            'assignment_category' => $assignment->category->category
        ]);

         $response->assertCreated();

        //  Test if task is complete, balance is updated by 10
        $response->getData()->task_completed ?
        assertEquals(Balance::where('user_id', $user->id)->pluck('balance')[0], 10) :
        assertEquals(Balance::where('user_id', $user->id)->pluck('balance')[0], 0);
    }

    public function test_user_can_get_complete_task_results()
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

        $category = Category::create([
            'category' => $this->faker()->word(6),
        ]);

        $this->post("api/v1/{$category->id}/assignments", [
            'question' => $this->faker()->text()
        ]);

        $assignment = Assignment::first();

        $response = $this->post("api/v1/{$user->id}/tasks",[
            'assignment_id' => $assignment->id,
            'task_completed' => $this->faker()->boolean(),
            'task_completed_at' => $this->faker()->time(),
            'assignment_rating' => $this->faker()->numberBetween(0,10),
            'assignment_earning' => $this->faker()->numberBetween(50,100),
            'assignment_category' => $assignment->category->category
        ]);

        $response = $this->get("api/v1/$user->id/tasks");

        $response->assertOk();
    }
}
