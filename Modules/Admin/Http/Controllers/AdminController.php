<?php

namespace Modules\Admin\Http\Controllers;

use Modules\Auth\Models\User;

class AdminController extends Controller
{
    // Register user
    public function __invoke()
    {
        return User::select('first_name','last_name','verified','email','mobile_number')->paginate(10);
    }
}
