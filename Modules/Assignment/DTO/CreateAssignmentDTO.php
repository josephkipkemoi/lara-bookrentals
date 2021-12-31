<?php

namespace Modules\Assignment\DTO;

class CreateAssignmentDTO
{
    public function __construct(

        public string $question,

        public string $category,

    ){}
}

