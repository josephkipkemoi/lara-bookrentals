<?php

namespace Modules\Review\Http\Controllers;

use Modules\Review\DTO\CreateReviewDTO;
use Modules\Review\Http\Requests\CreateReviewRequest;
use Modules\Auth\Models\User;

class ReviewController extends Controller
{
    // create Review
    public function __invoke(CreateReviewRequest $request, User $user)
    {
      return $user->review()->create((array) new CreateReviewDTO(...$request->validated()));
    }
}
