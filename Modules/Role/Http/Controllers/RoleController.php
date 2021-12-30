<?php

namespace Modules\Role\Http\Controllers;

use Modules\Role\DTO\CreateRoleDTO;
use Modules\Role\Http\Requests\CreateRoleRequest;
use Modules\Role\Models\Role;

class RoleController extends Controller
{
    // Register user
    public function __invoke(CreateRoleRequest $request, Role $role)
    {
      return $role->create((array) new CreateRoleDTO(...$request->validated()));
    }
}
