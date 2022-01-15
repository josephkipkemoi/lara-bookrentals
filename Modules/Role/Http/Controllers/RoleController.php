<?php

namespace Modules\Role\Http\Controllers;

use Modules\Role\DTO\CreateRoleDTO;
use Modules\Role\Http\Requests\CreateRoleRequest;
use Modules\Auth\Models\User;

class RoleController extends Controller
{
    // Register user role
    public function __invoke(CreateRoleRequest $request, User $user)
    {
      return $user->roles()->create((array) new CreateRoleDTO(...$request->validated()));
    }
}
