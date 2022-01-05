<?php

namespace Modules\Category\Http\Controllers;

use Modules\Category\DTO\CreateCategoryDTO;
use Modules\Category\Http\Requests\CreateCategoryRequest;
use Modules\Category\Models\Category;

class CategoryController extends Controller
{
    // create category
    public function __invoke(Category $category, CreateCategoryRequest $request)
    {
      return $category->create((array) new CreateCategoryDTO(...$request->validated()));
    }
}
