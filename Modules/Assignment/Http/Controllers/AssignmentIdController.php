<?php

namespace Modules\Assignment\Http\Controllers;

use Modules\Assignment\Models\Assignment;

class AssignmentIdController extends Controller
{
    // get assignment
    public function __invoke($id)
    {
      return Assignment::findOrFail($id);
    }
}
