<?php

namespace Modules\Payment\Observers;

use Modules\Payment\Models\Payment;

class PaymentObserver
{
    // activate user after payment is confirmed in database
    public function created(Payment $payment)
    {
        return $payment->user()->update(['verified' => true]);
    }
}
