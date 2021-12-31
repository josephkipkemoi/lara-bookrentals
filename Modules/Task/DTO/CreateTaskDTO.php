<?php

namespace Modules\Task\DTO;

class CreateTaskDTO
{
    public function __construct(

        public int $user_id,

        public int $assignment_id,

        public bool $task_completed,

        public string $task_completed_at,

        public string $assignment_category,

        public int $assignment_rating,

        public int $assignment_earning

    ){}
}

