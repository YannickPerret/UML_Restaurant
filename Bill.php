<?php 
class Bill {

    protected Customer $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }
}