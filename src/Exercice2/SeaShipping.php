<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice2;

class SeaShipping implements ShippingMethod
{
    public const BASE_PRICE = 30;
    public const PRICE_PER_KILOMETER = 0.3;
    public const PRICE_PER_KILOGRAM = 0.5;

    public function calculateCost(float $weight, float $distance): float
    {
        return self::BASE_PRICE + $distance * self::PRICE_PER_KILOMETER + $weight * self::PRICE_PER_KILOGRAM;
    }

    public function getEstimatedDays(): array
    {
        return [7, 14];
    }

    public function formatTracking(string $trackingNumber): string
    {
        return sprintf('SEA-%s', $trackingNumber);
    }
}
