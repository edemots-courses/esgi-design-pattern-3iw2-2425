<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice10;

use InvalidArgumentException;

class PaymentProcessor
{
    protected PaymentMethod $paymentMethod;

    public function setPaymentMethod(PaymentMethod $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment(float $amount): array
    {
        if (!isset($this->paymentMethod)) {
            throw new InvalidArgumentException("Payment method not set.");
        }
        return $this->paymentMethod->pay($amount);
    }
}
