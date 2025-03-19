<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice2;

class GroundShipping implements ShippingMethod
{
    public const BASE_PRICE = 10;
    public const PRICE_PER_KILOMETER = 0.5;
    public const PRICE_PER_KILOGRAM = 1;

    public function calculateCost(float $weight, float $distance): float
    {
        return self::BASE_PRICE + $distance * self::PRICE_PER_KILOMETER + $weight * self::PRICE_PER_KILOGRAM;
    }

    public function getEstimatedDays(): array
    {
        return [3, 5];
    }

    public function formatTracking(string $trackingNumber): string
    {
        return sprintf('GRD-%s', $trackingNumber);
    }
}
