<?php

namespace Modules\Task\Observers;

use Illuminate\Support\Facades\DB;
use Modules\Balance\Models\Balance;
use Modules\Task\Models\Task;


class TaskObserver
{
    // increment balance after task is complete
     public function created(Task $task)
    {
         if($task->task_completed === true)
        {
           return Balance::where('user_id',$task->user_id)->update(['balance' => DB::raw("balance + $task->assignment_earning")]);
        }
    }
}
