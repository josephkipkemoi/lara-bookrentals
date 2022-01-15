<?php

namespace Modules\Task\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Assignment\Models\Assignment;
use Modules\Auth\Models\User;

class Task extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public const ASSISTANT_EARNINGS = 100;

    public const ADMINISTRATOR_EARNINGS = 250;

    public const SPECIALIST_EARNINGS = 500;

    public const MANAGER_EARNINGS = 1000;

    public const EXECUTIVE_EARNINGS = 2500;

    protected $fillable = [
        'user_id',
        'assignment_id',
        'task_completed',
        'task_completed_at',
        'assignment_category',
        'assignment_rating',
        'assignment_earning'
    ];

    protected $casts = [
        'task_completed' => 'boolean',
        'assignment_id' => 'integer',
        'task_completed_at' => 'datetime',
        'user_id' => 'integer',
        'assignment_category' => 'string',
        'assignment_rating' => 'integer',
        'assignment_earning' => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assignment()
    {
        return $this->hasOne(Assignment::class);
    }
}
