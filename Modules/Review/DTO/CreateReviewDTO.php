<?php

namespace Modules\Review\DTO;

class CreateReviewDTO
{
    public function __construct(

        public string $review_title,

        public string $review_body,

        public int $review_rating,

    ){}
}

