<?php

namespace Modules\Contact\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'name',
        'email',
        'mobile_number',
        'title',
        'body'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'mobile_number' => 'integer',
        'title' => 'string',
        'body' => 'string'
    ];

}
