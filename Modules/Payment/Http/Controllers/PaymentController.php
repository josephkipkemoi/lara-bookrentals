<?php

namespace Modules\Payment\Http\Controllers;

use Modules\Payment\DTO\CreatePaymentDTO;
use Modules\Payment\Http\Requests\CreatePaymentRequest;
use Modules\Auth\Models\User;

class PaymentController extends Controller
{
    // post payment
    public function __invoke(User $user, CreatePaymentRequest $request)
    {
      return $user->payment()->create((array) new CreatePaymentDTO(...$request->validated()));
    }
}
