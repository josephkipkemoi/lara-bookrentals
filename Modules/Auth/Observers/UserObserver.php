<?php

namespace Modules\Auth\Observers;

use Modules\Auth\Models\User;
use Modules\Balance\Models\Balance;


class UserObserver
{
    // initialize balance table after user is created
    public function created(User $user)
    {
        return  $user->balance()->create();
    }
}
