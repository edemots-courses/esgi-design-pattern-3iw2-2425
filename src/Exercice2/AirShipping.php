<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice2;


class AirShipping implements ShippingMethod
{
    public function calculateCost(float $weight, float $distance): float
    {
        return 50.0 + (2 * $distance) + (3 * $weight);
    }

    public function getEstimatedDays(): array
    {
        return [1, 2];
    }

    public function formatTracking(string $trackingNumber): string
    {
        return 'AIR-' . $trackingNumber;
    }
}
