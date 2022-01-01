<?php

namespace Modules\Task\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Auth\Models\User;
use Modules\Task\Models\Task;

class TaskUserController extends Controller
{
    // create task
    public function __invoke(User $user, Request $request)
    {
      return $user->find($request->input('user'))->task;
    }
}
