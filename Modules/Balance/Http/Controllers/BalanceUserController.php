<?php

namespace Modules\Balance\Http\Controllers;

use Modules\Auth\Models\User;
use Modules\Balance\Models\Balance;

class BalanceUserController extends Controller
{
    // Get balance for user
    public function __invoke($id)
    {
      return User::find($id)->balance;
    }
}
