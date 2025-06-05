<?php

namespace App;

use App\PayPal;

class PayPalAdapter implements PaymentAdapterInterface
{
    private $paypal;

    public function __construct(PayPal $paypal)
    {
        $this->paypal = $paypal;
    }

<<<<<<< HEAD
    public function collectMoney($amount)
    {
        $result = $this->paypal->authorizeTransaction($amount);
        if ($result === 'PayPal Success!') {
=======
    public function collectMoney($amount): bool
    {
        $result = $this->paypal->transfer($this->paypal->getEmail(), $amount);
        if ($result === 'Paypal Success!') {
>>>>>>> student/Task06
            return true;
        }
        return false;
    }
}
