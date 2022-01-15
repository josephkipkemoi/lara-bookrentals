<?php

namespace Modules\Payment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Auth\Models\User;

class Payment extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public const ASSISTANT_PAYMENT_FEE = 3500;

    public const ADMINISTRATOR_PAYMENT_FEE = 8500;

    public const SPECIALIST_PAYMENT_FEE = 18500;

    public const MANAGER_PAYMENT_FEE = 37500;

    public const EXECUTIVE_PAYMENT_FEE = 76000;

    protected $fillable = [
        'amount'
    ];

    protected $casts = [
        'amount' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
