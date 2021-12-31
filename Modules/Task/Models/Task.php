<?php

namespace Modules\Task\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'task_completed',
        'assignment_id',
        'task_started_at',
        'user_id'
    ];

    protected $casts = [
        'task_completed' => 'boolean',
        'assignment_id' => 'integer',
        'task_started_at' => 'datetime',
        'user_id' => 'integer'
    ];
}
