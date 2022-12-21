<?php

namespace App\Services;


//bindig in service container
class PaymentGateway
{

    protected $secretkey;
    public function __construct(string $secretkey)
    {
        $this->secretkey = $secretkey;
    }
    public function execute()
    {
        return "Payment Gateway";
    }
}
