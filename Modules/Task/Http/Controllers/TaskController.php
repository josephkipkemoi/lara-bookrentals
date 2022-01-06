<?php

namespace Modules\Task\Http\Controllers;

use Modules\Assignment\Models\Assignment;
use Modules\Auth\Models\User;
use Modules\Task\DTO\CreateTaskDTO;
use Modules\Task\Http\Requests\CreateTaskRequest;
use Modules\Task\Models\Task;

class TaskController extends Controller
{
    // create task
    public function __invoke(CreateTaskRequest $request, User $user, Assignment $assignment)
    {
      return $user->task()->create((array) new CreateTaskDTO(...$request->validated()));
    }
}
