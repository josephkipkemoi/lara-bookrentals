<?php

namespace Modules\Role\Http\Controllers;

use Modules\Auth\Models\User;
use Modules\Role\Models\Role;

class RoleUserController extends Controller
{
    // get user role
    public function __invoke(User $user)
    {
        foreach($user->roles as $role)
        {
            return $role->role;
        }

    }
}
