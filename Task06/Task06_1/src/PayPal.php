<?php

namespace App;

class PayPal
{
    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

<<<<<<< HEAD
    public function authorizeTransaction($amount)
=======
    public function getEmail(): string
    {
        return $this->email;
    }

    public function transfer($email, $amount)
>>>>>>> student/Task06
    {
        return "PayPal Success!";
    }
}
