<?php

namespace Modules\Balance\Http\Controllers;

use Modules\Balance\DTO\CreateBalanceDTO;
use Modules\Balance\Http\Requests\CreateBalanceRequest;
use Modules\Balance\Models\Balance;

class BalanceController extends Controller
{
    // Register user
    public function __invoke(CreateBalanceRequest $request, Balance $balance)
    {
      return $balance->create((array) new CreateBalanceDTO(...$request->validated()));
    }
}
