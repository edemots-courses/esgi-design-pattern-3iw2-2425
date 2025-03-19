<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice2;

class AirShipping implements ShippingMethod
{
    public const BASE_PRICE = 50;
    public const PRICE_PER_KILOMETER = 2;
    public const PRICE_PER_KILOGRAM = 3;

    public function calculateCost(float $weight, float $distance): float
    {
        return self::BASE_PRICE + $distance * self::PRICE_PER_KILOMETER + $weight * self::PRICE_PER_KILOGRAM;
    }

    public function getEstimatedDays(): array
    {
        return [1, 2];
    }

    public function formatTracking(string $trackingNumber): string
    {
        return sprintf('AIR-%s', $trackingNumber);
    }
}
