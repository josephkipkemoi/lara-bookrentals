<?php

namespace Modules\Payment\Http\Controllers;

use Modules\Auth\Models\User;
use Modules\Payment\Models\Payment;

class PaymentUserController extends Controller
{
    // get all payment details
    public function __invoke(Payment $payment)
    {
      return $payment->get();
    }
}
