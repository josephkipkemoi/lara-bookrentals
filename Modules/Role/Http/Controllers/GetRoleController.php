<?php

namespace Modules\Role\Http\Controllers;

use Modules\Role\Models\Role;

class GetRoleController extends Controller
{
    // Get all on Database roles
    public function __invoke(Role $role)
    {
      return $role->all();
    }
}
