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
        'task_id',
        'task_started_at'
    ];

    protected $casts = [
        'task_completed' => 'boolean',
        'task_id' => 'integer',
        'task_started_at' => 'datetime'
    ];
}
