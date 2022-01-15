<?php

namespace Modules\Role\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Auth\Models\User;

class Role extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    public const IS_ASSISTANT_0 = 'Assistant';

    public const IS_ADMINISTRATOR_1 = 'Administrator';

    public const IS_SPECIALIST_2 = 'Specialist';

    public const IS_MANAGER_3 = 'Manager';

    public const IS_EXECUTIVE_4 = 'Executive';

    protected $fillable = [
        'role'
    ];

    protected $casts = [
        'role' => 'string',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
