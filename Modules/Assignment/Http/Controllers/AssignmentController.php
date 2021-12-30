<?php

namespace Modules\Assignment\Http\Controllers;

use Modules\Assignment\DTO\CreateAssignmentDTO;
use Modules\Assignment\Http\Requests\CreateAssignmentRequest;
use Modules\Assignment\Models\Assignment;

class AssignmentController extends Controller
{
    // create task
    public function __invoke(CreateAssignmentRequest $request, Assignment $assignment)
    {
      return $assignment->create((array) new CreateAssignmentDTO(...$request->validated()));
    }
}
