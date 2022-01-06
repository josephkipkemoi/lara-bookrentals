<?php

namespace Modules\Assignment\Http\Controllers;

use Modules\Assignment\DTO\CreateAssignmentDTO;
use Modules\Assignment\Http\Requests\CreateAssignmentRequest;
use Modules\Category\Models\Category;

class AssignmentController extends Controller
{
    // create task
    public function __invoke(CreateAssignmentRequest $request, Category $category)
    {
      return $category->assignment()->create((array) new CreateAssignmentDTO(...$request->validated()));
    }
}
