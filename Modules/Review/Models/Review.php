<?php

namespace Modules\Review\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'review_title',
        'review_body',
        'review_rating',
        'user_id'
    ];

    protected $casts = [
        'review_title' => 'string',
        'review_body' => 'string',
        'review_rating' => 'integer',
        'user_id' => 'integer'
    ];
}
