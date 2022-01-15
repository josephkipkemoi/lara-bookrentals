<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Auth\Models\User;
use Modules\Role\Models\Role;
use Tests\TestCase;
use Illuminate\Support\Str;

class RoleTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * Test admin can post new/ roles.
     *
     * @return void
     */
    public function test_admin_can_post_roles()
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

        $response = $this->post("api/v1/{$user->id}/roles",[
            'role' => Role::IS_ASSISTANT_0
        ]);

        $this->post("api/v1/{$user->id}/roles",[
            'role' => Role::IS_ADMINISTRATOR_1
        ]);
        $this->post("api/v1/{$user->id}/roles",[
            'role' => Role::IS_SPECIALIST_2
        ]);
        $this->post("api/v1/{$user->id}/roles",[
            'role' => Role::IS_MANAGER_3
        ]);
        $this->post("api/v1/{$user->id}/roles",[
            'role' =>  Role::IS_EXECUTIVE_4
        ]);

        $response->assertCreated();
    }

    public function test_user_can_set_role()
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

        $this->post("api/v1/{$user->id}/roles",[
            'role' => Role::IS_ASSISTANT_0
        ]);
        $this->post("api/v1/{$user->id}/roles",[
            'role' => Role::IS_ADMINISTRATOR_1
        ]);
        $this->post("api/v1/{$user->id}/roles",[
            'role' => Role::IS_SPECIALIST_2
        ]);
        $this->post("api/v1/{$user->id}/roles",[
            'role' => Role::IS_MANAGER_3
        ]);
        $this->post("api/v1/{$user->id}/roles",[
            'role' =>  Role::IS_EXECUTIVE_4
        ]);

        $roles = Role::get(['role']);

        $response = $this->post("api/v1/{$user->id}/roles", [
            'role' => $roles[0]->role
        ]);

        $response->assertCreated();
    }

    // Test client can get roles
    public function test_can_get_user_role()
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

      $role =  Role::create(['role' => Role::IS_ASSISTANT_0]);

      $this->post("api/v1/{$user->id}/roles", [
          'role' => Role::IS_ASSISTANT_0
      ]);

      $response = $this->get("api/v1/{$user->id}/roles/$role->id");

      $response->assertOk();
     }
}
