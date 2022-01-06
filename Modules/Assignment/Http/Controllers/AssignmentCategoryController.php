<?php

namespace Modules\Assignment\Http\Controllers;

use Modules\Assignment\Models\Assignment;
use Modules\Category\Models\Category;

class AssignmentCategoryController extends Controller
{
    // get assignment by category
    public function __invoke(Category $category)
    {
      return $category->assignment;
    }
}
