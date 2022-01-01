<?php

namespace Modules\Task\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Auth\Models\User;

class Task extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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
}
