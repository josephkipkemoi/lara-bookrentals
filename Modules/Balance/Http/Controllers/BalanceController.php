<?php

namespace Modules\Balance\Http\Controllers;

use Modules\Auth\Models\User;
use Modules\Balance\DTO\CreateBalanceDTO;
use Modules\Balance\Http\Requests\CreateBalanceRequest;
use Modules\Balance\Models\Balance;

class BalanceController extends Controller
{
    // update balance
    public function __invoke(CreateBalanceRequest $request, User $user)
    {
      return $user->balance()->create((array) new CreateBalanceDTO(...$request->validated()));
    }
}
