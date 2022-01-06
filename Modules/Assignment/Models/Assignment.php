<?php

namespace Modules\Assignment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Category\Models\Category;
use Modules\Task\Models\Task;

class Assignment extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'question',
    ];

    protected $casts = [
        'question' => 'string',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
