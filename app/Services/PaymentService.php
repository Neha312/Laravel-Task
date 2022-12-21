<?php

namespace App\Services;

//binding in service container
class PaymentService
{

    protected $gateway;


    public function __construct(PaymentGateway $gateway)
    {
        $this->gateway = $gateway;
    }


    public function process()
    {
        return  $this->gateway->execute();
    }
}
