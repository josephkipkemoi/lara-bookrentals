<?php

namespace Modules\Assignment\Http\Controllers;

use Modules\Assignment\Models\Assignment;
use Modules\Category\Models\Category;

class AssignmentByIdController extends Controller
{
    // get assignment by id
    public function __invoke(Category $category, $id)
    {
        return $category->assignment()->find($id);
    }
}
