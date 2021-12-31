<?php

namespace Modules\Assignment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'category',
    ];

    protected $casts = [
        'question' => 'string',
        'category' => 'string'
    ];
}
