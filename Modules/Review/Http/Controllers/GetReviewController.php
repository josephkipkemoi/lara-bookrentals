<?php

namespace Modules\Review\Http\Controllers;

use Modules\Review\Models\Review;

class GetReviewController extends Controller
{
    // create Review
    public function __invoke(Review $review)
    {
      return $review->paginate(5);
    }
}
