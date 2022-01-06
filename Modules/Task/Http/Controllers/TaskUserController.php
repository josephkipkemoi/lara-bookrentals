<?php

namespace Modules\Task\Http\Controllers;

use Modules\Auth\Models\User;

class TaskUserController extends Controller
{
    // get all tasks
    public function __invoke(User $user)
    {
      return $user->task;
    }
}
