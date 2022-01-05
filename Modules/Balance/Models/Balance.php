<?php

namespace Modules\Balance\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Auth\Models\User;

class Balance extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'balance', 'user_id'
    ];

    protected $casts = [
        'balance' => 'integer',
        'user_id' => 'integer'
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
