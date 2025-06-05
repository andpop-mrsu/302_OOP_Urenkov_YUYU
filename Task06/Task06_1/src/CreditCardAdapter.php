<?php

namespace App;

use App\CreditCard;

class CreditCardAdapter implements PaymentAdapterInterface
{
    private $creditCard;

    public function __construct(CreditCard $creditCard)
    {
        $this->creditCard = $creditCard;
    }

<<<<<<< HEAD
    public function collectMoney($amount)
    {
        $result = $this->creditCard->transfer($amount);
=======
    public function collectMoney($amount): bool
    {
        $result = $this->creditCard->authorizeTransaction($amount);
>>>>>>> student/Task06
        if (strpos($result, 'Authorization code:') !== false) {
            return true;
        }
        return false;
    }
}
