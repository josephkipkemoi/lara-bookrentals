<?php

namespace Modules\Review\Http\Controllers;

use Modules\Review\DTO\CreateReviewDTO;
use Modules\Review\Http\Requests\CreateReviewRequest;
use Modules\Review\Models\Review;

class ReviewController extends Controller
{
    // create Review
    public function __invoke(CreateReviewRequest $request, Review $review)
    {
      return $review->create((array) new CreateReviewDTO(...$request->validated()));
    }
}
