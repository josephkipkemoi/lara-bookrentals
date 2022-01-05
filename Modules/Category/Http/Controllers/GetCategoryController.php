<?php

namespace Modules\Category\Http\Controllers;

use Modules\Category\Models\Category;

class GetCategoryController extends Controller
{
    // get category
    public function __invoke(Category $category)
    {
      return $category->get();
    }
}
