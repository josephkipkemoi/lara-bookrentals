<?php

namespace Modules\Task\Observers;

use Illuminate\Support\Facades\DB;
use Modules\Balance\Models\Balance;
use Modules\Task\Models\Task;


class TaskObserver
{
    // increment balance after task is complete
    // To add try catch, not sure what the catch is currently
    public function created(Task $task)
    {
        if($task->task_completed === true)
        {
           return Balance::where('user_id',$task->user_id)->update(['balance' => DB::raw('balance + 10')]);
        }
    }
}
