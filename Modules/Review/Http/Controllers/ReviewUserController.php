<?php

namespace Modules\Review\Http\Controllers;

use Modules\Auth\Models\User;
use Modules\Review\Models\Review;

class ReviewUserController extends Controller
{
    // create Review
    public function __invoke(User $user)
    {
      return $user->review;
    }
}
