<?php

namespace Modules\Task\Http\Controllers;

use Modules\Task\DTO\CreateTaskDTO;
use Modules\Task\Http\Requests\CreateTaskRequest;
use Modules\Task\Models\Task;

class TaskController extends Controller
{
    // Register user
    public function __invoke(CreateTaskRequest $request, Task $task)
    {
      return $task->create((array) new CreateTaskDTO(...$request->validated()));
    }
}
