<?php

namespace Modules\Category\Http\Controllers;

use Modules\Assignment\Models\Assignment;
use Modules\Category\DTO\CreateCategoryDTO;
use Modules\Category\Http\Requests\CreateCategoryRequest;

class CategoryController extends Controller
{
    // create category
    public function __invoke(Assignment $assignment, CreateCategoryRequest $request)
    {
      return $assignment->category()->create((array) new CreateCategoryDTO(...$request->validated()));
    }
}
