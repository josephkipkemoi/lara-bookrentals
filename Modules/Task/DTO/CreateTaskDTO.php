<?php

namespace Modules\Task\DTO;

class CreateTaskDTO
{
    public function __construct(

        public bool $task_completed,

        public int $assignment_id,

        public string $task_started_at,

        public int $user_id

    ){}
}

