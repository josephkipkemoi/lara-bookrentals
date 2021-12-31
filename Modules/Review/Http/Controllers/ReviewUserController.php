<?php

namespace Modules\Review\Http\Controllers;

use Modules\Review\Models\Review;

class ReviewUserController extends Controller
{
    // create Review
    public function __invoke()
    {
      return Review::get();
    }
}
