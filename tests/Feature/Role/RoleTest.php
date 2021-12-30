<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Role\Models\Role;
use Tests\TestCase;

class RoleTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * Test admin can post new/ roles.
     *
     * @return void
     */
    public function test_can_post_role()
    {
        $response = $this->post('api/v1/roles',[
            'role' => 'manager'
        ]);

        $response->assertCreated();
    }

    // Test client can get roles
    public function test_can_get_role()
    {
        Role::create(['role' => 'CEO']);
        Role::create(['role' => 'Director']);
        Role::create(['role' => 'Manager']);

        $response = $this->get('api/v1/roles');

        $response->assertOk()
                 ->assertJsonCount(3);
    }
}
